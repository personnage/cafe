<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Jobs\SendConfirmationToEmail;
use Illuminate\Http\Request;

class ConfirmationsController extends Controller
{
    /**
     * Where to redirect users after confirmations.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     *  Where to redirect users after resend confirmation.
     *
     * @var string
     */
    protected $redirectAlmost = '/almost_there';

    /**
     * Create a new confirmation controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show "Almost there..." page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.confirmation.index');
    }

    /**
     * Show form to resend confirmation instructions or accept confirmation
     * if token is not null.
     *
     * @param  Request      $request
     * @param  string|null  $token
     * @return \Illuminate\Http\Response
     */
    public function showEmailForm(Request $request, $token = null)
    {
        if (is_null($token)) {
            return $this->showLinkRequestForm();
        }

        $this->validateSendConfirmationLinkEmail($request);

        $user = User::whereEmail($request->email)->first();

        if (! is_null($user) && ! $user->isConfirmed() && ! strcmp($user->confirmation_token, $token)) {
            $this->confirmationTo($user);
        }

        return redirect($this->redirectTo);
    }

    /**
     * Display the form to request a confirmation link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('auth.confirmation.resend');
    }

    /**
     * Send a confirmation link to the given user.
     *
     * @event  \App\Events\UserResendConfirmation
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendConfirmationLinkEmail(Request $request)
    {
        $this->validateSendConfirmationLinkEmail($request);

        $user = User::whereEmail($request->email)->first();

        if (! is_null($user) && ! $user->isConfirmed()) {
            $this->dispatch(new SendConfirmationToEmail($user));

            return redirect($this->redirectAlmost);
        }

        return redirect($this->redirectTo);
    }

     /**
     * Validate the request of sending confirmation link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateSendConfirmationLinkEmail(Request $request)
    {
        // Exclude "exists" rule from validation.
        $this->validate($request, ['email' => 'required|email|max:255']);
    }

    /**
     * Accept confirmation to user.
     *
     * @param  App\Contracts\Confirmable $user
     * @return void
     */
    protected function confirmationTo($user)
    {
        if ($user->confirm()) {
            auth()->login($user);
        }
    }
}
