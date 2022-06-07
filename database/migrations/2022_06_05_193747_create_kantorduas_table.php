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
        Schema::create('kantorduas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aset');
            $table->string('kode_aset');
            $table->string('merk');
            $table->string('ukuran');
            $table->string('bahan');
            $table->string('tahun_pembelian');
            $table->string('harga');
            $table->string('kondisi');
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
        Schema::dropIfExists('kantorduas');
    }
};
