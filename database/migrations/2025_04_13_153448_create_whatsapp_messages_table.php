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
        Schema::create('whatsapp_messages', function (Blueprint $table) {
            $table->id('id');
            $table->string('message_id')->nullable();
            $table->string('from');
            $table->string('pushname')->nullable();
            $table->enum('type', ['text', 'image', 'document']);
            $table->text('content')->nullable();
            $table->string('caption')->nullable();
            $table->string('mime_type')->nullable();
            $table->integer('is_group');
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
        Schema::drop('whatsapp_messages');
    }
};
