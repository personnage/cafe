<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Socialite;
use Carbon\Carbon;
use App\Models\User;
use App\Events\Registration\UserRegistered;

trait OAuth
{
    /**
     * Redirect the user to provider authentication page.
     *
     * @param  string   $provider The provider name: "github", "facebook" etc.
     * @return Response
     */
    public function redirectToProvider(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.
     *
     * @param  string   $provider The provider name: "google", "twitter" etc.
     * @return Response
     */
    public function handleProviderCallback(string $provider)
    {
        $user = $this->findOrCreateProviderUser(
            $provider,
            Socialite::driver($provider)->user()
        );

        Auth::login($user);

        if (method_exists($this, 'redirectPath')) {
            return redirect()->to($this->redirectPath());
        }

        return back();
    }

    /**
     * Find or create new user.
     *
     * Only GitHub.
     *
     * @event  UserRegistered
     * @param  stirng                      $providerName
     * @param  \Laravel\Socialite\Two\User $providerUser
     * @return \App\Models\User
     */
    protected function findOrCreateProviderUser(string $providerName, $providerUser)
    {
        $user = User::firstOrNew([
            // example: githab_id => 12345
            sprintf('%s_id', $providerName) => $providerUser->id
        ]);

        if ($user->exists) {
            return $user;
        }

        // Find the user in the table "users" if he has
        // passed the stage of registration.
        if ($userByEmail = User::whereEmail($providerUser->email)->first()) {
            // - Bind account with provider id.
            $userByEmail->forceFill([
                // We trust "Socialite" and user will be a confirmed automatic.
                'confirmed_at' => $userByEmail->confirmed_at ?? Carbon::now(),

                sprintf('%s_id', $providerName) => $providerUser->id,
            ])->save();

            return $userByEmail;
        }

        // Create new user.
        $user->forceFill([
            'name' => $providerUser->name,
            'email' => $providerUser->email,

            // We will be generated password to user for safety account.
            // Reset password may be later.
            'password' => bcrypt(str_random(10)),

            // We trust "Socialite" and user will be a confirmed automatic.
            'confirmed_at' => Carbon::now(),

            sprintf('%s_id', $providerName) => $providerUser->id,
        ])->save();

        event(new UserRegistered($user, ! $user->isConfirmed()));

        return $user;
    }
}
