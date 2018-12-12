<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoProductVariantOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_variant_options', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('product_variant_id');
			$table->string('name', 45);
			$table->unique(['product_variant_id','name'], 'UNIQUE_product_variant_id_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('so_product_variant_options');
	}

}
