<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoSystemConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('system_config', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('system_name', 100);
			$table->text('system_val', 65535);
			$table->string('system_type', 55);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('so_system_config');
	}

}