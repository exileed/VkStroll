<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('owner_id');
           $table->integer('acc_id')->unsigned();
           $table->foreign('acc_id')->references('id')->on('accounts')->onDelete('cascade');
           $table->integer('target_id')->unsigned();
           $table->foreign('target_id')->references('id')->on('targets')->onDelete('cascade');
           $table->text('name');
           $table->text('settings');
           $table->text('msg');
           $table->integer('last_id');
           $table->string('status');
           $table->string('status_type');
           $table->string('status_text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}
