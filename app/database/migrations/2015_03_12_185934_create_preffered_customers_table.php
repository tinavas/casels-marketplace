<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrefferedCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('preffered_customers', function(Blueprint $table)
        {
            $table->increments('id');
			$table->string('first_name', 64);
			$table->string('last_name', 64);
            $table->string('address', 128);
            $table->string('state', 64);
            $table->string('zip', 64);
            $table->string('phone', 64);
            $table->string('email', 128);
            $table->string('ip', 64);
			$table->string('remember_token', 100)->nullable();
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
		Schemma::drop();
	}

}
