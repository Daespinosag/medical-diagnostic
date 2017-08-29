<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_level', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('level_id');
            $table->unsignedInteger('patient_id');
            $table->integer('medical_case');

            $table->date('diagnosis_date')->nullable();

            $table->foreign('level_id')->references('id')->on('level')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('patient')->onDelete('cascade');

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
        Schema::dropIfExists('patient_level');
    }
}
