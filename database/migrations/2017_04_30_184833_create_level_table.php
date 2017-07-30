<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('diagnosis_id');
            $table->string('name')->nullable();
            $table->enum('gender',['M','F'])->default('M');
            $table->string('formula')->nullable();
            $table->string('response')->nullable();

            $table->foreign('diagnosis_id')->references('id')->on('diagnosis')->onDelete('cascade');

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
        Schema::dropIfExists('level');
    }
}
