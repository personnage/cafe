<?php

namespace App\Http\Controllers\Admin;

use App\Events\User\Impersonated;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ResetsPasswords;

    /**
     * The user repository instance.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new controller instance.
     *
     * @param \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;

        $this->middleware('admin', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::filter($request->input('filter'));

        if ($request->has('search')) {
            $users = $users->search($request->input('search'));
        }

        $users = $users->sort($request->input('sort'));
        $users = $users->simplePaginate($request->input('per_page') ?? 15);

        return view('admin.users.index', compact('users'))
            ->with('activeCount', $this->users->totalUsers())
            ->with('adminsCount', $this->users->totalAdmins())
            ->with('deletedCount', User::onlyTrashed()->count())
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;

        return view('admin.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @event  \App\Events\User\WasCreated
     * @param  \App\Http\Requests\CreateUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $user = User::forceCreate(array_merge($request->except('_token'), [
            'password' => bcrypt(str_random(10)),
            'notification_email' => $request->input('email'),

            'admin' => !! $request->input('admin'),
            'confirmed_at' => Carbon::now(),
            'created_by_id' => auth()->id(),
        ]));

        if ($user->wasRecentlyCreated) {
            $user->resetAuthenticationToken();
            $user->save();

            $this->sendResetLinkEmail($request);

            return back()->with('notice', 'User was successfully created.');
        }

        return back()->with('alert', 'Error occurred. User was not created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, int $user_id)
    {
        $user = User::withTrashed()->findOrFail($user_id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @event  \App\Events\User\WasChanged
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User          $user
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, User $user)
    {
        // The administrator cannot absolve themselves of responsibility.
        if (auth()->id() !== $user->id) {
            $user->admin = !! $request->input('admin');
        }

        if (strlen($request->input('password')) > 1) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->fill($request->except('password'))->save();

        return back()->with('notice', 'User was successfully updated.');
    }

    /**
     * Force a confirmation.
     *
     * @event  \App\Events\User\WasConfirmed
     * @param  \App\Models\User               $user
     * @return \Illuminate\Http\Response
     */
    public function confirm(User $user)
    {
        if ($user->confirm()) {
            return back()->with('notice', 'Successfully confirmed.');
        }

        return back()->with('alert', 'Error occurred. User was not confirmed');
    }

    /**
     * Rstore soft deleted user.
     *
     * @event  \App\Events\User\WasRestored
     * @param  int                           $user_id
     * @return \Illuminate\Http\Response
     */
    public function restore($user_id)
    {
        $user = User::withTrashed()->findOrFail($user_id);

        if ($user->trashed()) {
            $user->restore();

            return back()->with('notice', 'The user restored.');
        }

        return back()->with('alert', 'Error occurred. User was not restored.');
    }

    /**
     * Mark up as deleted.
     *
     * @event  \App\Events\User\WasDeleted
     * @param  \App\Models\User          $user
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user)
    {
        if ($user->delete()) {
            return back()->with('notice', 'The user is being deleted.');
        }

        return back()->with('alert', 'Error occurred. User was not deleted.');
    }

    /**
     * Delete user forever.
     *
     * @event  \App\Events\User\WasDeleted
     * @param  \App\Models\User             $user_id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $user_id)
    {
        $user = User::withTrashed()->findOrFail($user_id);

        if ($user->forceDelete()) {
            return redirect()->route('admin.user.index', ['filter' => 'deleted'])
                ->with('notice', 'The user is being deleted.');
        }

        return back()->with('alert', 'Error occurred. User was not deleted.');
    }

    /**
     * Impersonate given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User          $user
     * @return \Illuminate\Http\Response
     */
    public function impersonate(Request $request, User $user)
    {
        $request->session()->put('impersonator_id', auth()->id());

        auth()->login($user);

        event(new Impersonated($user, auth()->user()));

        return redirect()->to($request->root());
    }
}
