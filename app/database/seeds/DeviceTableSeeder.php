<?php

class DeviceTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('devices')->delete();

		Device::create(array(
			'name' => "Температура"
		));
		
		Device::create(array(
			'name' => "Влажност"
		));
		Device::create(array(
			'name' => "Светлина"
		));

	}

}

