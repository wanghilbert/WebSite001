<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('ResId')->unsigned();
            $table->integer('FansNum')->unsigned();
            $table->decimal('CostEffective', 5, 2);
            $table->integer('CollectedNum')->unsigned();
            $table->integer('AvgViewNum')->unsigned();
            $table->integer('SumViewNum')->unsigned();
            $table->integer('SumUpNum')->unsigned();
            $table->integer('PurchaseNum')->unsigned();
            $table->integer('CommentsNum')->unsigned();
            $table->integer('DeliveryRatio')->unsigned();
            $table->integer('Credit')->unsigned();

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
        Schema::drop('statistics');
    }
}
