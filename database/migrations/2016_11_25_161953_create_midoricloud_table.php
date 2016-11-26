<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMidoricloudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midori_clouds', function (Blueprint $table) {
            $table->increments('id')->index;
            $table->integer('products_id');
            $table->integer('co');
            $table->float('sw_ver');
            $table->float('watertemp');
            $table->string('device_id');
            $table->float('temperature');
            $table->float('soil_moisture');
            $table->float('humidity');
            $table->float('illuminance');
            $table->string('hw_ver');
            $table->string('file');
            $table->string('saved_to');
            $table->timestamp('created_at');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop('midori_clouds');
    }
}
