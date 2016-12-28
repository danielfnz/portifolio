<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //id, on_blog, from_user, body, at_time
        Schema::create('comentarios', function(Blueprint $table)
        {
            $table->increments('id');
            $table -> integer('on_post') -> unsigned() -> default(0);
            $table->foreign('on_post')
            ->references('id')->on('posts')
            ->onDelete('cascade');
            $table->string('nome');
            $table->text('comentario');
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
        Schema::drop('comentarios');
    }
}
