<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();
            $table->string('title');
            $table->text('announcement');
            $table->text('body');
            $table->boolean('comments_allowed');
            $table->unsignedInteger('news_category_id')->index();
            $table->unsignedInteger('user_id');

            $table->boolean('is_published');
            $table->timestamp('published_since')->nullable();
            $table->timestamp('published_until')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('news_category_id')
                ->references('id')
                ->on('news_categories')
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
        Schema::drop('news_items');
    }
}
