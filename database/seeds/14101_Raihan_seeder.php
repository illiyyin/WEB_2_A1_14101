<?php

use Illuminate\Database\Seeder;

class 14101_Raihan_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker
		
		$Limit = 10;
		
		for ($i = 0; $i < $Limit; $i++){
			DB::table('customer')->insert([
				'name'=> $faker->name,
				'email'=> $faker->email, //email unique
				'password' => $faker->password,
				
				'creditCardNumber' => $faker->randomDigit,
			]);
		}
    }
}
