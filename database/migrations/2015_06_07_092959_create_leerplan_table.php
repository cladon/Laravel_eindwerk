<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeerplanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leerplan', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('leerplannummer',20)->nullable();
            $table->string('ingang',20)->nullable();

            $table->timestamps();
		});		Schema::create('leerplans', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('leerplannummer',20)->nullable();
            $table->string('ingang',20)->nullable();

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
		Schema::drop('leerplan');
	}

}
