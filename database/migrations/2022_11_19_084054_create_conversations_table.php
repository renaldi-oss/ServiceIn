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
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_one');
            $table->foreign('user_one')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('user_two');
            $table->foreign('user_two')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        if (Schema::hasTable('conversations')) {
            Schema::table('messages', function (Blueprint $table) {
                $table->foreign('conversation_id')->references('id')->on('conversations')->onDelete('cascade');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversations');
    }
};
