<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiabetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diabetes', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('diabetesID');
			$table->integer('illnessID')->index();
			$table->date('date');
			$table->time('time');
			$table->string('beforeFood');
			$table->string('afterFood');
			$table->integer('sugarLevel');
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
        Schema::dropIfExists('diabetes');
    }
}
