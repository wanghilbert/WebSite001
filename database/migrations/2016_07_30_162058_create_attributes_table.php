<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('ResId')->unsigned();
            $table->text('Introduction');
            $table->text('Addition');      
            $table->integer('CollectedNum')->unsigned();         
            $table->integer('SumViewNum')->unsigned();
            $table->integer('SumUpNum')->unsigned();
            $table->integer('PurchaseNum')->unsigned();
            $table->integer('CommentsNum')->unsigned();
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
        Schema::drop('attributes');
    }
}
