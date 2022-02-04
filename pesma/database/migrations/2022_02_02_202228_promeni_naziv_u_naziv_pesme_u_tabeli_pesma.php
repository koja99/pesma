<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromeniNazivUNazivPesmeUTabeliPesma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pesmas', function (Blueprint $table) {
            $table->renameColumn('naziv','naziv_pesme');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pesmas', function (Blueprint $table) {
            $table->renameColumn('naziv_pesme','naziv');
        });
    }
}
