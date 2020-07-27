<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('addressID')->unique();
			$table->integer('patientID')->index();
			$table->integer('userID')->index();
			$table->string('type');
			$table->string('name');
			$table->string('street');
			$table->string('town');
			$table->string('county');
			$table->string('postcode');
			$table->string('telephone');
			$table->string('fax');
			$table->string('email');
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
        Schema::dropIfExists('addresses');
    }
}
