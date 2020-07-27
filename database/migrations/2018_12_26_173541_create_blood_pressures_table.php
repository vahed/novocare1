<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodPressuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_pressures', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('bloodPressureID')->unique();
			$table->integer('illnessID')->index();
			$table->date('date');
			$table->time('time');
			$table->string('systolicPressure');
			$table->string('diastolicPressure');
			$table->string('heartRate');
			$table->string('comment')->nullable();
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
        Schema::dropIfExists('blood_pressures');
    }
}
