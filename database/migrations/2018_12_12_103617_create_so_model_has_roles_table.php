<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoModelHasRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('model_has_roles', function(Blueprint $table)
		{
			$table->integer('role_id')->unsigned();
			$table->string('model_type');
			$table->bigInteger('model_id')->unsigned();
			$table->primary(['role_id','model_id','model_type']);
			$table->index(['model_id','model_type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('so_model_has_roles');
	}

}
