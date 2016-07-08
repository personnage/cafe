<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSignableToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('sign_in_count')->default(0);
            $table->timestamp('current_sign_in_at')->nullable()->index();
            $table->timestamp('last_sign_in_at')->nullable();
            $table->string('current_sign_in_ip')->nullable();
            $table->string('last_sign_in_ip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'sign_in_count',
                'current_sign_in_at',
                'last_sign_in_at',
                'current_sign_in_ip',
                'last_sign_in_ip',
            ]);
        });
    }
}
