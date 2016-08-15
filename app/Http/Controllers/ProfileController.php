<?php

namespace App\Http\Controllers;

use Hash;
use Auth;
use App\Http\Requests;
use App\Models\User;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Requests\EditProfileRequest;

class ProfileController extends Controller
{

    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('app.profile.list', compact('users'));
    }

    /**
     * Show current user profile
     *
     * @param User $profile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $profile)
    {
        $city = $profile->city_id ? City::whereId($profile->city_id)->get() : null;

        return view('app.profile.profile', compact('profile', 'city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $profile
     * @return Response
     */
    public function edit(User $profile)
    {

        if ($profile->id != Auth::id())
            return redirect()->to('profile/' . $profile->id);

        $cities = City::all();
        return view('app.profile.edit', compact('profile', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  $request
     * @param $profile
     * @return Response
     */
    public function update(EditProfileRequest $request, User $profile)
    {

        $profile->fill($request->all())->save();

        return back()->with('notice', 'Информация была успешно обновлена!');
    }

    /**
     * @param User $profile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPasswordForm(User $profile)
    {
        $cities = City::all();
        return view('app.profile.edit', compact('profile', 'cities'));
    }

    /**
     * @param User $profile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showNoticeForm(User $profile)
    {
        $cities = City::all();
        return view('app.profile.edit', compact('profile', 'cities'));
    }

    /**
     * @param User $profile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAccountForm(User $profile)
    {
        $cities = City::all();
        return view('app.profile.edit', compact('profile', 'cities'));
    }

    /**
     * @param Request $request
     * @param User $profile
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request, User $profile)
    {

        $this->validate($request, [
            'current_pass' => 'required',
            'new_pass' => 'required|min:6',
            'confirm_pass' => 'required',
        ]);

        if (!Hash::check($request->current_pass, $profile->getAuthPassword()))
            return back()->with('error', 'Текущий пароль не совпадает!');


        if ($request->new_pass != $request->confirm_pass)
            return back()->with('error_pass', 'Пароли не совпадают!');

        $profile->update([
            'password' => bcrypt($request->new_pass)
        ]);

        return back()->with('notice', 'Пароль успешно обновлен');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateNotifications()
    {
        return back()->with('notice', 'Данные успешно изменены');
    }

    /**
     * @param User $profile
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function softDelete(User $profile)
    {
        if ($profile->delete()) {
            return redirect()->to('login');
        }

        return back()->with('notice', 'Error occurred. User was not deleted.');
    }
}
