<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderInvoiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_invoice', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('CODE');
			$table->integer('ORDER_ID');
			$table->string('LABEL');
			$table->string('LABEL_INDICE');
			$table->integer('ETAT');
			$table->integer('CREATOR_ID');
			$table->integer('MODIFIED_ID')->nullable();
			$table->integer('INCOTERM');
			$table->text('COMENT', 65535);
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
		Schema::drop('order_invoice');
	}

}
