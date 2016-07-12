<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('NewsId');
            $table->integer('UserId')->unsigned();
            $table->string('Title');
            $table->dateTime('CreatedDate');
            $table->string('Tags');
            $table->string('Link');
            $table->string('Pic');
            $table->text('Content');
            $table->foreign('UserId')->references('UserId')->on('users');
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
        Schema::drop('news');
    }
}
