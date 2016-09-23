<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('targets', function(Blueprint $table) {
           $table->increments('id')->unsigned();
           $table->integer('owner_id');
           $table->string('type');
           $table->string('name');
           $table->integer('count');
           $table->string('status');
           $table->string('last_target');
           $table->string('last_target_body');
           $table->string('status_type');
           $table->string('status_text');
           $table->string('json_params');
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
        Schema::drop('targets');
    }
}
