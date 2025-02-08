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
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->id('id');
            $table->string('nik', 25);
            $table->string('jk', 2);
            $table->string('nama', 200);
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('hp');
            $table->string('email', 50);
            $table->integer('desa_id');
            $table->integer('kec_id');
            $table->integer('user_id');
            $table->integer('status')->default(0);
            $table->string('token', 50);
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
        Schema::drop('masyarakats');
    }
};
