<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('target_base')->unsigned();
            $table->foreign('target_base')->references('id')->on('targets')->onDelete('cascade');
            $table->integer('vk_id');

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
