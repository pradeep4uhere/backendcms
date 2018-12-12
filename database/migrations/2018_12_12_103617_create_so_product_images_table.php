<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoProductImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_images', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->bigInteger('user_product_id');
			$table->string('image_name', 225);
			$table->boolean('is_default')->default(0);
			$table->boolean('status')->default(1);
			$table->bigInteger('user_id')->nullable();
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
		Schema::drop('so_product_images');
	}

}
