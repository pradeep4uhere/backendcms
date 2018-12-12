<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoCartItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cart_items', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cart_id');
			$table->bigInteger('user_id')->nullable();
			$table->integer('seller_id')->nullable();
			$table->bigInteger('product_id');
			$table->integer('quantity');
			$table->decimal('price', 10);
			$table->integer('discount_type_id')->nullable();
			$table->decimal('price_after_discount', 10)->nullable();
			$table->float('shipping_amount', 6)->nullable();
			$table->float('gst_amount', 6)->nullable();
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
		Schema::drop('so_cart_items');
	}

}
