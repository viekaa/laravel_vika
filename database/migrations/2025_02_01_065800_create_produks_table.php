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
        Schema::create('produks', function (Blueprint $table) {
            $table->Bigincrements('id');
            $table->string('nama_produk');
            $table->string('harga');
            $table->string('stok');
            $table->unsignedBigInteger('id_kategori');
            $table->string('foto');

            // relasi
            $table->foreign('id_kategori')->references('id')->on('kategoris')->onDelete('cascade');
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
        Schema::dropIfExists('produks');
    }
};
