<?php

use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserCreateTest extends TestCase
{
    use DatabaseTransactions;

    public function test_only_admin_must_be_create_new_user()
    {
        $user = factory(User::class)->create();
        $admin = factory(User::class)->create(['admin' => 1]);

        $this->actingAs($user);

        $response = $this->call('GET', 'admin/user/create');

        $this->assertResponseStatus(404);
    }
}
