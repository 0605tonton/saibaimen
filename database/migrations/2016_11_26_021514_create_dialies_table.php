<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDialiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dialies', function (Blueprint $table) {
            $table->increments('id')->index;
            $table->integer('products_id');
            $table->integer('owners_id');
            $table->string('memo');
            $table->timestamp('created_at');
            $table->dateTimeTz('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	Schema::drop('dialies');
    }
}
