<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('city_id')->index();
            $table->unsignedInteger('resto_network_id')->nullable()->index();
            $table->unsignedInteger('resto_group_id')->nullable()->index();
            $table->unsignedInteger('replacement_id')->nullable()->index();
            $table->unsignedInteger('status_id')->index();
            $table->unsignedInteger('user_id')->index();

            $table->string('name')->index();
            $table->string('title');

            $table->string('title_alt')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('site')->nullable();
            $table->text('description')->nullable();

            $table->string('chef')->nullable();
            $table->string('sommelier')->nullable();
            $table->string('breakfast')->nullable();
            $table->string('business_lunch')->nullable();
            $table->string('delivery')->nullable();
            $table->text('extra_info')->nullable();
            $table->date('open_since')->nullable();
            $table->string('parking')->nullable();
            $table->string('location')->nullable();
            $table->string('seats')->nullable();
            $table->string('smoking')->nullable();

            $table->text('menu')->nullable();
            $table->text('menu_banquet')->nullable();
            $table->text('menu_business_lunch')->nullable();
            $table->text('menu_quote')->nullable();
            $table->text('wine_card')->nullable();

            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();

            $table->text('panorama')->nullable();
            $table->text('video')->nullable();

            $table->date('check_date')->nullable();

            $table->string('status_comment')->nullable();

            $table->unsignedInteger('advert_type_id')->nullable()->index();
            $table->timestamp('advert_end_at')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('resto_network_id')
                ->references('id')
                ->on('resto_networks')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('resto_group_id')
                ->references('id')
                ->on('resto_groups')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('replacement_id')
                ->references('id')
                ->on('restaurants')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // TODO раскомментировать, когда будет готова таблица statuses
            // $table->foreign('status_id')
            //     ->references('id')
            //     ->on('statuses')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::getConnection()->statement('
            CREATE INDEX title_on_restaurants_trigram
            ON restaurants
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
        Schema::drop('restaurants');
    }
}
