<?php

namespace App\Http\Controllers\Auth;

use App\Jobs\SendConfirmationToEmail;
use App\Http\Requests\RegisteredUserRequest;
use App\Models\User;
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
     * The fields containing the user name.
     *
     * @var string
     */
    protected $username = 'login';

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
     * @see    \Illuminate\Foundation\Auth\RegistersUsers::register
     * @event  \App\Events\User\WasRegistered
     * @param  \App\Http\Requests\RegisteredUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function register(RegisteredUserRequest $request)
    {
        $user = User::create(array_merge($request->except('password'), [
            'password' => bcrypt($request->input('password')),
            'notification_email' => $request->input('email'),
        ]));

        if ($user->wasRecentlyCreated) {
            $user->resetAuthenticationToken()->save();

            dispatch(new SendConfirmationToEmail($user));
        }

        return redirect('/almost_there');
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @see    \Illuminate\Foundation\Auth\AuthenticatesUsers::getCredentials
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function getCredentials(Request $request)
    {
        $credentials = $request->only($this->loginUsername(), 'password');

        $loginKey = filter_var($credentials[$this->loginUsername()], \FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $loginValue = array_pull($credentials, $this->loginUsername());

        // Update credentials
        return array_merge($credentials, [$loginKey => $loginValue]);
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
        if ($user->isConfirmed()) {
            return redirect()->intended($this->redirectPath());
        }

        // Because the user is logged in, but did not pass the current rules.
        auth()->logout();

        return $this->sendFailedLoginResponse($request);
    }
}
