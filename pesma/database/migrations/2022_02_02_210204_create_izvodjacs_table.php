<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzvodjacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izvodjacs', function (Blueprint $table) {
            $table->id();
            $table->string('ime')->unique();
            $table->string('prezime')->unique();
            $table->integer('godina_rodjenja')->unique();
            $table->string('mesto_rodjenja')->unique();
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
        Schema::dropIfExists('izvodjacs');
    }
}
