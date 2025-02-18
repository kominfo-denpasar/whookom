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
        Schema::create('konselings', function (Blueprint $table) {
            $table->id('id');
            $table->text('hasil')->nullable();
            $table->text('kesimpulan')->nullable();
            $table->text('saran')->nullable();
            $table->string('berkas_pendukung')->nullable();
            $table->integer('status')->default(0);
            $table->string('psikolog_id', 50)->nullable();
            $table->string('mas_id', 50)->nullable();
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
        Schema::drop('konselings');
    }
};
