<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->string('vehicle_id_number');
            $table->string('registration_date');
            $table->string('manufacture_year');
            $table->integer('milage');
            $table->string('transmission'); 
            $table->string('engine_capacity');
            $table->string('fuel_type')->nullable();
            $table->string('Body_style');
            $table->string('exterior_color')->nullable();
            $table->string('interior_color')->nullable();
            $table->string('drive_type');
            $table->integer('number_of_doors');
            $table->integer('number_of_seats');
            $table->string('dimension')->nullable();
            $table->string('condition');
            $table->string('expiry_date');
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
        Schema::dropIfExists('product_attributes');
    }
}
