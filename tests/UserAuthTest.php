<?php

use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserAuthTest extends TestCase
{
    use DatabaseTransactions;

    public function test_a_user_can_a_registration()
    {
        $this->expectsEvents(App\Events\User\Created::class);
        $this->expectsEvents(App\Events\User\Registered::class);

        $this->visit('/register')
            ->type('Taylor', 'name')
            ->type('taylor@example.org', 'email')
            ->type('my password', 'password')
            ->press('Register')
            ->seePageIs('/almost_there')
        ;
    }

    public function test_a_user_can_a_reset_password()
    {
        $user = factory(User::class)->create();

        $this->visit('/password/reset')
            ->type($user->email, 'email')
            ->press('Send Password Reset Link')
            ->see('success')
        ;

        $this->seeInDatabase('password_resets', ['email' => $user->email]);
    }

    public function test_a_user_can_a_resend_confirmation()
    {
        $user = factory(User::class)->create();

        $this->visit('/confirmation')
            ->type($user->email, 'email')
            ->press('Resend confirmation instructions')
            ->seePageIs('/almost_there')
        ;

        $this->seeInDatabase('users', ['confirmed_at' => $user->confirmed_at]);
    }

    public function test_a_user_must_be_a_confirm_before_login()
    {
        $user = factory(User::class)->create([
            'password' => bcrypt('my password')
        ]);

        $this->visit('/login')
            ->type($user->email, 'email')
            ->type('my password', 'password')
            ->seePageIs('/login')
        ;
    }
}
