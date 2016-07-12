<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->nullable()->index();
        });

        Schema::getConnection()->statement(
            sprintf(
                'CREATE INDEX %s ON users USING gin (%s gin_trgm_ops);',
                'users_on_name_trigram',
                'name'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
}
