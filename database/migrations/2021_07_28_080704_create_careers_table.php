<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jobtitle');
            $table->unsignedInteger('major_id');
            $table->foreign('major_id')->references('id')->on('majors')->onUpdate('cascade')->onDelete('cascade');
            $table->string('jurusansma'); 
            $table->boolean('r');
            $table->boolean('i');
            $table->boolean('a');
            $table->boolean('s');
            $table->boolean('e');
            $table->boolean('c');
            $table->string('overview');
            $table->string('jobdesc');
            $table->longText('basicskill');
            $table->longText('socialskill');
            $table->longText('peopleskill');
            $table->longText('personality'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
}