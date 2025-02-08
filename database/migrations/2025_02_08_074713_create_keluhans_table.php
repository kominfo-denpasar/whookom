<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluhans', function (Blueprint $table) {
            $table->id('id');
            $table->text('Keluhan');
            $table->string('waktu_kapan');
            $table->integer('nilai_mengganggu');
            $table->integer('jadwal_id');
            $table->string('mas_id');
            $table->string('psikolog_id');
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
        Schema::drop('keluhans');
    }
};
