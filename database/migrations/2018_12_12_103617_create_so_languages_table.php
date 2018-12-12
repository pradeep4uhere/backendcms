<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('languages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('languageName', 250);
			$table->string('languageCode', 250);
			$table->string('languageFlag', 250);
			$table->string('langClass', 200);
			$table->string('isDefault')->default('0');
			$table->string('status')->default('0');
			$table->timestamps();
			$table->boolean('created_by')->default(0);
			$table->boolean('updated_by')->default(0);
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('so_languages');
	}

}
