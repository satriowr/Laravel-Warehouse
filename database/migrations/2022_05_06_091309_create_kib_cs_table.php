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
        Schema::create('kib_cs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aset');
            $table->string('kode_aset');
            $table->string('kondisi');
            $table->string('konstruksi_bertingkat');
            $table->string('konstruksi_beton');
            $table->string('jumlah_lantai');
            $table->string('lokasi');
            $table->string('tanggal_dokumen');
            $table->string('nomor_dokumen');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');    
            $table->string('status_tanah');
            $table->string('kode_tanah');
            $table->string('asal_usul');
            $table->string('harga');
            $table->string('keterangan');
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
        Schema::dropIfExists('kib_cs');
    }
};
