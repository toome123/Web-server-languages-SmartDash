<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('SettingTableSeeder');
		$this->command->info('Setting table seeded.');
		$this->call('DeviceTableSeeder');
		$this->command->info('Device table seeded.');
		
	}

}