<?php

class SettingTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('settings')->delete();

		Settings::create(array(
			'frequency' => 1000,
			'api' => 'http://localhost:3000/devices'
		));
		
	}

}

