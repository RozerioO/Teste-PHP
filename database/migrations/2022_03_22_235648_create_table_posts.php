<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('text');
            $table->integer('category_id');
            $table->integer('user_id');

            $table->foreign('category_id') -> references('id') -> on('categories') -> onDelete('cascade');
            $table->foreign('user_id') -> references('id') -> on('users') -> onDelete('cascade') ;

        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
