<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('last_name_1');
            $table->string('last_name_2')->nullable();
            $table->string('email')->nullable();
            $table->integer('identification_card')->unique();
            $table->enum('gender',['M','F'])->default('M');

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
        Schema::dropIfExists('patient');
    }
}
