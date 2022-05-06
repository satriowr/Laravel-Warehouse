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
            $table->string('nama_aset');
            $table->string('kode_aset');
            $table->string('bahan');
            $table->string('lokasi');
            $table->string('warna');
            $table->string('merk');
            $table->string('tipe');
            $table->string('tahun');
            $table->string('jumlah');
            $table->string('hps');
            $table->string('no_inventaris_lama');    
            $table->string('keterangan');
            $table->string('gambar');
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
        Schema::dropIfExists('kib_bs');
    }
};
