<?php

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PermissionTest extends TestCase
{
    use DatabaseTransactions;

    public function test_role_mass_assignment()
    {
        $permission = new Permission([
            'name' => 'test-permission',
            'label' => 'The test permission.'
        ]);

        $this->assertEquals('test-permission', $permission->name);
        $this->assertEquals('The test permission.', $permission->label);
    }

    public function test_permission_soft_deleted_and_restore()
    {
        $permission = factory(Permission::class, 1)->create();

        $this->assertTrue($permission->exists);
        $this->assertFalse($permission->trashed());

        $permission->delete();

        $this->assertTrue($permission->trashed());
        $this->assertEquals(0, Permission::count());
        $this->assertEquals(1, Permission::withTrashed()->count());

        $permission->restore();

        $this->assertFalse($permission->trashed());
        $this->assertEquals(1, Permission::count());
        $this->assertEquals(1, Permission::withTrashed()->count());
    }

    public function test_permission_it_belongs_roles()
    {
        $permission = factory(Permission::class)->create();
        factory(Role::class, 3)->create()->each(function ($role) use ($permission) {
            $role->givePermissionTo($permission);
        });

        $this->assertEquals(3, $permission->roles()->count());
    }
}
