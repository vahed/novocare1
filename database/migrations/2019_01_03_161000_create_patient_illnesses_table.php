<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientIllnessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_illnesses', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('patientIllnessID')->unique();
			$table->integer('patientID')->index();
			$table->integer('illnessID')->index();
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
        Schema::dropIfExists('patient_illnesses');
    }
}
