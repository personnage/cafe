<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestoNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resto_networks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();
            $table->string('title');

            $table->text('description')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::getConnection()->statement('
            CREATE INDEX title_on_resto_networks_trigram
            ON resto_networks
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
        Schema::drop('resto_networks');
    }
}
