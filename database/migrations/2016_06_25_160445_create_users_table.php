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

            $table->index(['created_at', 'id'], 'users_on_created_at_and_id');
        });

        $statement = 'CREATE INDEX %s ON users USING gin (%s gin_trgm_ops);';

        Schema::getConnection()->statement(sprintf(
            $statement, 'users_on_name_trigram', 'name'
        ));

        Schema::getConnection()->statement(sprintf(
            $statement, 'users_on_email_trigram', 'email'
        ));
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
