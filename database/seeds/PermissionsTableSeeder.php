<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'create-user',
            'label' => 'Allowed to create a user.',
        ]);

        Permission::create([
            'name' => 'update-user',
            'label' => 'Allowed to update a user.',
        ]);

        Permission::create([
            'name' => 'delete-user',
            'label' => 'Allowed to delete a user.',
        ]);

        Permission::create([
            'name' => 'edit-post',
            'label' => 'Allowed to edit a post.',
        ]);

        Permission::create([
            'name' => 'delete-post',
            'label' => 'Allowed to delete a post.',
        ]);
    }
}
