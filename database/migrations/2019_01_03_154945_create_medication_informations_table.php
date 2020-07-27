<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicationInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medication_informations', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('medicationInformationID')->unique();
			$table->string('whatIsAndWhatIsItUsedFor');
			$table->string('warningsAndPrecautions');
			$table->string('howToTakeMedicine');
			$table->string('possibleSideEffects');
			$table->string('howToStoreMedicine');
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
        Schema::dropIfExists('medication_informations');
    }
}
