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
        Schema::create('bukus', function (Blueprint $table) {
            $table->Bigincrements('id');
            $table->string('nama_buku');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('image');
            $table->unsignedBigInteger('id_penerbit');
            $table->date('tgl_terbit');
            $table->unsignedBigInteger('id_genre');

            // relasi
            $table->foreign('id_penerbit')->references('id')->on('penerbits')->onDelete('cascade');
            $table->foreign('id_genre')->references('id')->on('genres')->onDelete('cascade');

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
        Schema::dropIfExists('bukus');
    }
};
