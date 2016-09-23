<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('owner_id');
            $table->string('login')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('avatar');
            $table->string('device');
            $table->string('user_agent');
            $table->string('proxy_ip');
            $table->string('proxy_auth');
            $table->string('proxy_type');
            $table->string('token');
            $table->string('status');
            $table->string('status_type');
            $table->string('status_text');
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
        Schema::drop('accounts');
    }
}
