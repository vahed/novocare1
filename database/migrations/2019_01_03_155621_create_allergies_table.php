<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllergiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allergies', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('allergyID')->unique();
			$table->integer('patientID')->index();
			$table->string('nameOfAllergy');
			$table->string('typeOFAllergy');
			$table->string('comment');
			$table->date('dateOfDiagnosis');
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
        Schema::dropIfExists('allergies');
    }
}
