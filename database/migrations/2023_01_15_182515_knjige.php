<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Knjige extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knjige', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->string('autor');
            $table->integer('zanrID');
            $table->integer('proizvodjacID');
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
        Schema::dropIfExists('knjige');
    }
}
