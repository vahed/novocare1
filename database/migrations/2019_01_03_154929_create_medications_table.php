<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medications', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('medicationID')->unique();
			$table->integer('patientID')->index();
			$table->string('name');
			$table->string('strength');
			$table->string('formulation');
			$table->string('dose');
			$table->string('directions');
			$table->integer('medicationInformationID')->index();
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
        Schema::dropIfExists('medications');
    }
}
