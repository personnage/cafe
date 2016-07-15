<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['created_at', 'id'], 'users_on_created_at_and_id');
        });

        foreach (['name', 'email'] as $name) {
            Schema::getConnection()->statement(
                sprintf('CREATE INDEX users_on_%1$s_trigram ON users USING gin (%1$s gin_trgm_ops);', $name)
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
