<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
//use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Faker\Generator as Faker;
use App\Profile;

class ProfileTest extends TestCase
{
	//use DatabaseMigrations;
    /** Insert data into profiles table 
	*@test
	**/	
	function testEmailExist(){
		/*$this->assertDatabaseHas('profiles', [
			'firstname' => 'Vahed'
		]);*/
	}
	function insertRecordIntoProfilesTable(){

		$factory->state(App\Profile::class)->create([
			'firstname' => 'Amir',
			'lastname' => 'Sayad',
			'userType' => 'Carer'
		]);
		//$this->assertTrue(true);
		//DB::insert('insert into users (name,email,password) values (?,?,?)', ['Vahed','Abdolvahed@yahoo.com','vahed123']);
	}
	
}
