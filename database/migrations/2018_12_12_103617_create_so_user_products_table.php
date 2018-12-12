<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoUserProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_products', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->bigInteger('user_id');
			$table->bigInteger('product_id');
			$table->string('product_sku', 100)->nullable();
			$table->text('default_images', 65535)->nullable();
			$table->text('default_thumbnail', 65535)->nullable();
			$table->integer('quantity_in_unit');
			$table->boolean('product_in_stock')->default(1);
			$table->boolean('unlimited_product')->default(1);
			$table->integer('quantity')->default(1);
			$table->float('default_price', 10);
			$table->boolean('isDiscounted')->nullable()->default(0);
			$table->float('price', 10);
			$table->integer('discountType')->nullable();
			$table->string('discount_value', 10)->nullable();
			$table->boolean('status')->default(1);
			$table->boolean('is_deleted')->default(0);
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
		Schema::drop('so_user_products');
	}

}
