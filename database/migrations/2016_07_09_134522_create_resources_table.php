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
            $table->boolean('AuthByWeChat');
            $table->string('Name')->unique();
            $table->string('Link')->nullable();
            $table->integer('FansNum')->unsigned();
            $table->text('Desp')->nullable();
            $table->string('Tags')->nullable();
            $table->decimal('HeadLinePrice', 10, 2)->nullable();
            $table->decimal('NonHeadLinePrice', 10, 2)->nullable();
            $table->text('Addition')->nullable();

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
