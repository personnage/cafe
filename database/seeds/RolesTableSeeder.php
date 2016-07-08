<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'manager',
            'label' => 'Site Manager',
        ]);

        Role::create([
            'name' => 'editor',
            'label' => 'Site Editor',
        ]);
    }
}
