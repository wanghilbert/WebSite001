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
            $table->string('Name')->nullable();
            $table->string('WeChat')->unique();
            $table->integer('FansNum')->unsigned();
            $table->string('Tags')->nullable();
            $table->string('Region')->nullable();
            $table->decimal('HeadLinePrice', 10, 2)->nullable();
            $table->decimal('NonHeadLinePrice', 10, 2)->nullable();
            $table->integer('AvgViews')->nullable();
            $table->decimal('CostEffective', 10, 2)->default(8.22);
            $table->integer('Collects')->default(0);
            $table->integer('Purchases')->default(0);
            $table->integer('Comments')->default(0);
            $table->string('Intro')->nullable();

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
