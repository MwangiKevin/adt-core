<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientIllnessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_patient_illness', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('patient_id')->unsigned();
            $table->bigInteger('illness_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            // fk
            $table->foreign('patient_id')->references('id')->on('tbl_patient');
            $table->foreign('illness_id')->references('id')->on('tbl_illness');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_patient_illness');
    }
}
