<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function(Blueprint $table) {
            $table->increments('id');
            $table->char('name', 100)->unique();
            $table->text('attributes')->nullable();
            $table->timestamps();
        });

        Schema::create('user_roles', function(Blueprint $table){
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->unique(['role_id','user_id']);
            $table->timestamps();
        });

        //add foreign keys
        Schema::table('user_roles', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
        Schema::dropIfExists('roles');
    }
}
