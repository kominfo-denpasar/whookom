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
            $table->text('keluhan');
            $table->string('waktu_kapan');
            $table->integer('nilai_mengganggu');
            $table->integer('jadwal_id')->nullable();
            $table->date('jadwal_tgl')->nullable();
            $table->string('jadwal_jam')->nullable();
            $table->date('jadwal_alt_tgl')->nullable();
            $table->string('jadwal_alt_jam')->nullable();
            $table->date('jadwal_alt2_tgl')->nullable();
            $table->string('jadwal_alt2_jam')->nullable();
            $table->string('mas_id');
            $table->string('psikolog_id')->nullable();
            $table->integer('status')->default(0);
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
