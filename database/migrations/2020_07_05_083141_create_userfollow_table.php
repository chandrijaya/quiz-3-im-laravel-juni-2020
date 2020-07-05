<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserfollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_follow', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->integer('user_follow_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->dateTime('date_follow');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userfollow');
    }
}
