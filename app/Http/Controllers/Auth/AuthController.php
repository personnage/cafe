<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Events\Registration\UserRegistered;
use App\Http\Requests\RegisteredUserRequest;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins, OAuth;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     *  Where to redirect users after registred.
     *
     * @var string
     */
    protected $redirectAlmost = '/almost_there';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Handle a registration request for the application.
     *
     * @event  UserRegistered
     * @param  \App\Http\Requests\RegisteredUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function register(RegisteredUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        event(new UserRegistered($user, ! $user->isConfirmed()));

        return redirect($this->redirectAlmost);
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request                    $request
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, User $user)
    {
        if (! $user->isConfirmed()) {
            auth()->logout();

            return $this->sendFailedLoginResponse($request);
        }

        return redirect()->intended($this->redirectPath());
    }
}
