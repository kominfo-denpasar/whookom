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
        Schema::create('dasshasils', function (Blueprint $table) {
            $table->id('id');
            $table->integer('mas_id')->unsigned();
            $table->integer('nilai_d');
            $table->integer('nilai_s');
            $table->integer('nilai_a');
            $table->string('hasil_akhir');
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
        Schema::drop('dasshasils');
    }
};
