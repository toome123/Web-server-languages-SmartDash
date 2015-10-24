<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('values', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('device_id')->unsigned();
			$table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
			$table->float('value');
			$table->string('unit');
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
		Schema::drop('values');
	}

}
