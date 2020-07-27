<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_vitals', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('vitalsID')->unique();
			$table->integer('patientID')->index();
			$table->string('height');
			$table->string('weight');
			$table->string('age');
			$table->string('mobility');
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
        Schema::dropIfExists('health_vitals');
    }
}
