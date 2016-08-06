<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selections', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('UserId')->unsigned();
            $table->integer('ResId')->unsigned();
            $table->boolean('Option');
            $table->decimal('Price', 10, 2);
            $table->foreign('UserId')->references('UserId')->on('users');
            $table->foreign('ResId')->references('ResId')->on('resources');
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
        Schema::drop('selections');
    }
}
