<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 225);
			$table->text('description', 65535);
			$table->integer('category_id');
			$table->integer('sub_category_id');
			$table->integer('brand_id');
			$table->integer('unit_id');
			$table->bigInteger('created_by');
			$table->dateTime('created_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('so_products');
	}

}
