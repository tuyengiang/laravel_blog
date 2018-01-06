<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts',function( Blueprint $table ){
            $table->increments('id');
            $table->string('title',120);
            $table->string('excerpt',140);
            $table->text("content");
            $table->timestamps(); // tu tao cot time ngay them va nga sua
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
