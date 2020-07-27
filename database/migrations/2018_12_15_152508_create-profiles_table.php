<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('userID')->unique();
			$table->integer('id')->index();
            $table->string('firstname');
			$table->string('lastname');
			$table->string('userType');
			$table->string('gender');
			$table->date('dateOfBirth');
			$table->string('phone');
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
        Schema::dropIfExists('profiles');
    }
}
