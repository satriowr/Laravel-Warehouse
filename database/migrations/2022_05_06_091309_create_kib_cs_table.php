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
            $table->string('nama_aset')->nullable();
            $table->string('kode_aset')->nullable();
            $table->string('kondisi')->nullable();
            $table->string('konstruksi_bertingkat')->nullable();
            $table->string('konstruksi_beton')->nullable();
            $table->string('jumlah_lantai')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('tanggal_dokumen')->nullable();
            $table->string('nomor_dokumen')->nullable();
            $table->string('luas_tanah')->nullable();
            $table->string('luas_bangunan')->nullable();    
            $table->string('status_tanah')->nullable();
            $table->string('kode_tanah')->nullable();
            $table->string('asal_usul')->nullable();
            $table->string('harga')->nullable();
            $table->string('keterangan')->nullable();
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
