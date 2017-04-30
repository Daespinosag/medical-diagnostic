<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariablePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variable_patient', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('variable_id');
            $table->unsignedInteger('patient_id');
            $table->string('value')->default(null)->nullable();
            $table->date('date_completed')->default(null)->nullable();

            $table->foreign('variable_id')->references('id')->on('variable')->onDelete('cascade');
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
        Schema::dropIfExists('variable_patient');
    }
}
