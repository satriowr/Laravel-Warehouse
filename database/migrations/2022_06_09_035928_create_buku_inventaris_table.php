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
        Schema::create('buku_inventaris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aset')->nullable();
            $table->string('kode_aset')->nullable();
            $table->string('luas_tanah')->nullable();
            $table->string('tahun_pengadaan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('hak')->nullable();
            $table->string('tanggal_sertifikat')->nullable();
            $table->string('nomor_sertifikat')->nullable();
            $table->string('penggunaan')->nullable();
            $table->string('asal_usul')->nullable();
            $table->string('harga')->nullable();    
            $table->string('keterangan')->nullable();

            $table->string('bahan')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('warna')->nullable();
            $table->string('merk')->nullable();
            $table->string('tipe')->nullable();
            $table->string('tahun')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('hps')->nullable();
            $table->string('no_inventaris_lama')->nullable();    
            $table->string('gambar')->nullable();

            $table->string('kondisi')->nullable();
            $table->string('konstruksi_bertingkat')->nullable();
            $table->string('konstruksi_beton')->nullable();
            $table->string('jumlah_lantai')->nullable();
            $table->string('tanggal_dokumen')->nullable();
            $table->string('nomor_dokumen')->nullable();
            $table->string('luas_bangunan')->nullable();    
            $table->string('status_tanah')->nullable();
            $table->string('kode_tanah')->nullable();

            $table->string('pengarang_buku')->nullable();
            $table->string('penerbit_buku')->nullable();
            $table->string('tahun_terbit')->nullable();

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
        Schema::dropIfExists('buku_inventaris');
    }
};
