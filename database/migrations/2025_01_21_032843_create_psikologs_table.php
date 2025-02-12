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
        Schema::create('psikologs', function (Blueprint $table) {
            $table->id('id');
            $table->string('nik', 25);
            $table->string('kta', 10)->nullable();
            $table->string('sipp', 10)->nullable();
            $table->string('nama', 200);
            $table->string('hp');
            $table->text('alamat_rumah')->nullable();
            $table->text('alamat_praktek');
            $table->string('kec_id', 25)->nullable();
            $table->string('desa_id', 25)->nullable();

            $table->integer('user_id');
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
        Schema::drop('psikologs');
    }
};
