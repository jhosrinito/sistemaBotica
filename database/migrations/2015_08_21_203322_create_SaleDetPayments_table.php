<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleDetPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saledetPayments', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha');
            $table->decimal('monto',10,2);
            $table->integer('salePayment_id')->unsigned();
            $table->foreign('salePayment_id')->references('id')->on('salePayments');
            $table->integer('saleMethodPayment_id')->unsigned();
            $table->foreign('saleMethodPayment_id')->references('id')->on('saleMethodPayments');
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
        Schema::drop('saledetPayments');
    }
}
