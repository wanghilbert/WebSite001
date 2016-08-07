<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('ResId');
            $table->string('Name')->unique();
            $table->string('HeadPic');
            $table->string('SmallPic');
            $table->string('WeChat');
            $table->string('QQ');
            $table->string('Region');
            $table->boolean('AuthByWeChat');
            $table->integer('AvgViewNum')->unsigned();
            $table->integer('FansNum')->unsigned();
            $table->decimal('HeadLinePrice', 10, 2);
            $table->decimal('NonHeadLinePrice', 10, 2);
            $table->decimal('CostEffective', 5, 2);
            $table->integer('DeliveryRatio')->unsigned();
            $table->integer('Credit')->unsigned();

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
        Schema::drop('resources');
    }
}
