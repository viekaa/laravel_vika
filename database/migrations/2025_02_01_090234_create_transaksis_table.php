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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->Bigincrements('id');
            $table->integer('jumlah');
            $table->date('tgl_transaksi');
            $table->unsignedBigInteger('id_buku');
            $table->unsignedBigInteger('id_pembeli');

            // relasi
            $table->foreign('id_buku')->references('id')->on('bukus')->onDelete('cascade');
            $table->foreign('id_pembeli')->references('id')->on('pembelis')->onDelete('cascade');

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
        Schema::dropIfExists('transasis');
    }
};
