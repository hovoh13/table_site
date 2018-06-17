<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCantactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('maps');
            $table->string('phone');
            $table->string('phone_city');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cantact');
    }
}
