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
			$table->string('banner',1)->default('0');
			$table->string('retired',1)->default('0');
			$table->string('puppy',1)->default('0');
			$table->string('sold',1)->default('0');
			$table->string('past',1)->default('1');
			$table->string('mom',30)->nullable();
			$table->string('dad',30)->nullable();
			$table->string('fun',30)->default('0');
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
