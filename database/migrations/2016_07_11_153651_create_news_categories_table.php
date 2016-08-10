<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable()->index();

            $table->string('name')->index();
            $table->string('title');
            $table->text('announcement');
            $table->text('description')->default('');
            $table->string('thumbnail')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('parent_id')
                ->references('id')
                ->on('news_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::getConnection()->statement('
            CREATE INDEX title_on_news_categories_trigram
            ON news_categories
            USING GIN (title gin_trgm_ops)
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news_categories');
    }
}
