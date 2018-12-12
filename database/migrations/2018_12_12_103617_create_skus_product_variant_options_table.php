<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkusProductVariantOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('s_product_variant_options', function(Blueprint $table)
		{
			$table->integer('sku_id');
			$table->integer('product_variant_id')->index('spvo_product_variant_id_product_var_idx');
			$table->integer('product_variant_options_id')->index('spvo_product_variant_options_id_pro_idx');
			$table->primary(['sku_id','product_variant_options_id','product_variant_id']);
			$table->unique(['sku_id','product_variant_id'], 'UNIQUE_sku_id_product_variant_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('skus_product_variant_options');
	}

}
