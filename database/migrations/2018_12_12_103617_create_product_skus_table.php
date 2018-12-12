<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductSkusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('duct_skus', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('product_id')->index('skus_product_id_products_id_idx');
			$table->string('sku', 45);
			$table->decimal('price', 10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_skus');
	}

}
