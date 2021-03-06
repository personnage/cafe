<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $toTrancate = ['users', 'roles', 'permissions'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // if ('local' === config('app.env')) {
        //     foreach ($this->toTrancate as $table) {
        //        DB::table($table)->truncate();
        //     }
        // }

        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
    }
}
