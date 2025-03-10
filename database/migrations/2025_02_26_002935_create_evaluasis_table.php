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
        Schema::create('evaluasis', function (Blueprint $table) {
            $table->id('id');
            $table->integer('nilai_layanan');
            $table->integer('nilai_keluhan');
            $table->integer('rekomendasi');
            $table->char('mas_id', 30);
            $table->char('psikolog_id', 30);
            $table->integer('keluhan_id');
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
        Schema::drop('evaluasis');
    }
};
