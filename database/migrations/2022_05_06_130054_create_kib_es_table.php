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
        Schema::create('kib_es', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aset')->nullable();
            $table->string('kode_aset')->nullable();
            $table->string('pengarang_buku')->nullable();
            $table->string('penerbit_buku')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('tahun_terbit')->nullable();
            $table->string('asal_usul')->nullable();
            $table->string('harga')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('kib_es');
    }
};
