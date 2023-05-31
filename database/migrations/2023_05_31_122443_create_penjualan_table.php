<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('transaction_number')->unique();
            table->foreign('marketing_id')->references('id')->on('marketing')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date');
            $table->integer('cargo_fee')->unsigned();
            $table->integer('total_balance')->unsigned();
            $table->integer('grand_total')->unsigned();
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
        Schema::dropIfExists('penjualan');
    }
}
