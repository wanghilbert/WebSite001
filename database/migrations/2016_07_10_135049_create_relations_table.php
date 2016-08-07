<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Model\Resouce as resouces;
use App\Model\Tag as tags;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations', function (Blueprint $table) {
            $table->integer('ResId')->unsigned();
            $table->integer('TagId')->unsigned();
            $table->foreign('TagId')->references('TagId')->on('tags');
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
        Schema::drop('relations');
    }
}
