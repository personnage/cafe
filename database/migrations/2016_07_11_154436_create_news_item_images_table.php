<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsItemImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_item_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('news_item_id')->index();

            $table->string('name');

            $table->foreign('news_item_id')
                ->references('id')
                ->on('news_items')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news_item_images');
    }
}
