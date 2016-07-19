<?php

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoleTest extends TestCase
{
    use DatabaseTransactions;

    public function test_role_mass_assignment()
    {
        $role = new Role([
            'name' => 'testrole',
            'label' => 'The testrole label!',
        ]);

        $this->assertEquals('testrole', $role->name);
        $this->assertEquals('The testrole label!', $role->label);
    }

    public function test_role_soft_deleted_and_restore()
    {
        $role = factory(Role::class, 1)->create();

        $this->assertTrue($role->exists);
        $this->assertFalse($role->trashed());

        $role->delete();

        $this->assertTrue($role->trashed());
        $this->assertEquals(0, Role::count());
        $this->assertEquals(1, Role::withTrashed()->count());

        $role->restore();

        $this->assertFalse($role->trashed());
        $this->assertEquals(1, Role::count());
        $this->assertEquals(1, Role::withTrashed()->count());
    }

    public function test_a_role_can_add_and_revoke_permissions()
    {
        $role = factory(Role::class, 1)->create();

        $perm_first = factory(Permission::class)->make();
        $role->givePermissionTo($perm_first);
        $this->assertEquals(1, $role->permissions()->count());

        $perm_second = factory(Permission::class)->make();
        $role->givePermissionTo($perm_second);
        $this->assertEquals(2, $role->permissions()->count());


        $role->revokePermissionTo($perm_first);
        $this->assertEquals(1, $role->permissions()->count());

        $role->revokePermissionTo($perm_second);
        $this->assertEquals(0, $role->permissions()->count());
    }
}
