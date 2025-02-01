<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->Bigincrements('id');
            $table->unsignedBigInteger('id_product');
            $table->integer('quantity');
            $table->date('order_date');
            $table->unsignedBigInteger('id_customer');

            // relasi
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('id_customer')->references('id')->on('customers')->onDelete('cascade');

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
        Schema::dropIfExists('orders');
    }
};
