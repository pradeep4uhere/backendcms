<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoSellerImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seller_images', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->bigInteger('user_id');
			$table->bigInteger('seller_id')->nullable();
			$table->string('image_name', 225);
			$table->boolean('is_default')->default(0);
			$table->boolean('status')->default(1);
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
		Schema::drop('so_seller_images');
	}

}
