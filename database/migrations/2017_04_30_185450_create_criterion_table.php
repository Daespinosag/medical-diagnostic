<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriterionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criterion', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('level_id');
            $table->unsignedInteger('variable_id');
            $table->string('value_1')->default(null)->nullable();
            $table->string('value_2')->default(null)->nullable();
            $table->string('operator_comparison');
            $table->string('unit');
            $table->enum('gender',['M','F','O'])->default('O');

            $table->foreign('level_id')->references('id')->on('level')->onDelete('cascade');
            $table->foreign('variable_id')->references('id')->on('variable')->onDelete('cascade');

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
        Schema::dropIfExists('criterion');
    }
}
