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
            $table->string('nik', 25)->unique()->nullable();
            $table->string('jk', 2);
            $table->string('nama', 200);
            $table->date('tgl_lahir');
            $table->string('alamat')->nullable();
            $table->string('hp')->unique();
            $table->string('email', 50)->nullable();

            $table->string('status_kawin', 25)->nullable();
            $table->string('pendidikan', 25)->nullable();
            $table->string('pekerjaan', 25)->nullable();

            $table->integer('desa_id')->nullable();
            $table->integer('kec_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('status')->default(0);
            $table->string('token', 50)->unique();
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
