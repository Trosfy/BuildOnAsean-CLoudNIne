<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uni_majors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('university_id');
            $table->foreign('university_id')->references('id')->on('universities')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('major_id');
            $table->foreign('major_id')->references('id')->on('majors')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('budget');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uni_majors');
    }
}
