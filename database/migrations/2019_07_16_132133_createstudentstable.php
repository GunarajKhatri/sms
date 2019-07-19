<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createstudentstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classmod_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('fathername');
            $table->string('mothername');
            $table->integer('birth');
            $table->integer('age');
            $table->string('sex');
            $table->string('address');
            $table->string('section');
            $table->string('image');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
