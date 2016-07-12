<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('seo_name');
            $table->text('announcement');
            $table->text('body');
            $table->boolean('comments_allowed');
            $table->integer('category_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('user_id');
            $table->timestamps();
            $table->softDeletes();

            $table->index('seo_name');
            $table->index(['city_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('content');
    }
}
