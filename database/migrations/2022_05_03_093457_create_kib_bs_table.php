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
        Schema::create('kib_bs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aset')->nullable();
            $table->string('kode_aset')->nullable();
            $table->string('bahan')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('warna')->nullable();
            $table->string('merk')->nullable();
            $table->string('tipe')->nullable();
            $table->string('tahun')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('hps')->nullable();
            $table->string('no_inventaris_lama')->nullable();    
            $table->string('keterangan')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kib_bs');
    }
};
