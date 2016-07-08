<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use Socialite;

use App\Models\User;

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

        auth()->login($user);

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
     * @param  stirng                      $providerName
     * @param  \Laravel\Socialite\Two\User $providerUser
     * @return \App\Models\User
     */
    protected function findOrCreateProviderUser(string $providerName, $providerUser)
    {
        $user = User::firstOrNew([
            sprintf('%s_id', $providerName) => $providerUser->id
        ]);

        if ($user->exists) {
            return $user;
        }

        if ($userByEmail = User::whereEmail($providerUser->email)->first()) {
            // - Bind account with provider id.
            $userByEmail->forceFill([
                // We trust "Socialite" and user will be a confirmed automatic.
                'confirmed_at' => $userByEmail->confirmed_at ?? Carbon::now(),

                sprintf('%s_id', $providerName) => $providerUser->id,
            ])->save();

            return $userByEmail;
        }

        $user->fill([
            'name' => $providerUser->name,
            'email' => $providerUser->email,
            'username' => $providerUser->nickname,
            // We will be generated password to user for safety account.
            // Reset password may be later.
            'password' => bcrypt(str_random(10)),
            'notification_email' => $providerUser->email,
        ]);

        $user->forceFill([
            // We trust "Socialite" and user will be a confirmed automatic.
            'confirmed_at' => Carbon::now(),

            sprintf('%s_id', $providerName) => $providerUser->id,
        ]);

        $user->save();

        return $user;
    }
}
