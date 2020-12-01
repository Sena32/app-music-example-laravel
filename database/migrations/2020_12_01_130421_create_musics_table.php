<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicsTable extends Migration
{
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->integer('track');
            $table->integer('like');
            $table->string('vocalist', 30);
            $table->string('file', 255);
            $table->string('imgTumbnail', 255);
            $table->timestamps();
            $table->softDeletes();
        });
    }
  
    public function down()
    {
        Schema::drop('musics');
    }
}
