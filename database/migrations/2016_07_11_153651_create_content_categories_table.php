<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();
            $table->string('label');
            $table->unsignedInteger('content_category_type_id');
            $table->unsignedInteger('parent_id')->nullable();

            $table->foreign('content_category_type_id')
                ->references('id')
                ->on('content_category_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('parent_id')
                ->references('id')
                ->on('content_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->index(['content_category_type_id', 'parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('content_categories');
    }
}
