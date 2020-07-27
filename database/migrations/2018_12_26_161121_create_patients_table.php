<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('patientID');
			$table->integer('patientIllnessID')->index();
			$table->integer('userID')->index();
			$table->string('nextOfKin');
			$table->string('bloodType');
			$table->string('isDisabled');
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
        Schema::dropIfExists('patients');
    }
}
