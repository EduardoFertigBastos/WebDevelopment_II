<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->date('birth');
			$table->unsignedInteger('address_id');
			$table->integer('gender');
			$table->char('cpf', 11);
			$table->string('email', 255);
			$table->string('password', 40);

			$table->timestamps();

			$table->foreign('address_id')->references('id')->on('addresses');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}
}
