<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_title');
            $table->string('property_price');
            $table->string('property_descr');
            $table->string('property_town');
            $table->string('property_location');
            $table->string('property_type');
            $table->string('property_status');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('garage');
            $table->string('area');
            $table->string('property_image');
            $table->text('property_features');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
