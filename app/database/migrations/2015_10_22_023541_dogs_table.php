<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dogs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',100);
			$table->string('comment',200)->nullable();
			$table->string('gender',10);
			$table->string('img_url',100);
			$table->string('img_url2',100)->nullable();
			$table->tinyInteger('banner')->default(0)->nullable();
			$table->tinyInteger('retired')->default(0)->nullable();
			$table->tinyInteger('puppy')->default(0)->nullable();
			$table->tinyInteger('sold')->default(0)->nullable();
			$table->tinyInteger('past')->default(0)->nullable();
			$table->string('mom',30)->nullable();
			$table->string('dad',30)->nullable();
			$table->tinyInteger('fun')->default(0)->nullable();
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
		Schema::drop('dogs');
	}

}
