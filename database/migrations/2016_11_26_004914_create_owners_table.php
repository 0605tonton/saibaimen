<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('owners', function (Blueprint $table) {
            $table->increments('id')->index;
            $table->string('google_id');
            $table->string('google_name');
            $table->string('google_given_name');
            $table->string('google_family_name');
            $table->string('google_picture');
            $table->string('google_locale');
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
	Schema::drop('owners');
    }
}
