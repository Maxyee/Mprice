<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationadvisoryserviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informationadvisoryservices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('infomobileapp_name');
            $table->string('infowebsite_name');
            $table->string('infocallcenter_number');
            $table->string('location');
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
        Schema::dropIfExists('informationadvisoryservices');
    }
}
