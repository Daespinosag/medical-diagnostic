<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeDiagnosisRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_type_diagnosis_rol', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('type_diagnosis_id');
            $table->unsignedInteger('rol_id');

            $table->foreign('type_diagnosis_id')->references('id')->on('type_diagnosis')->onDelete('cascade');

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
        Schema::dropIfExists('user_type_diagnosis_rol');
    }
}
