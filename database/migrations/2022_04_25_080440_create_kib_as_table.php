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
        Schema::create('kib_as', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aset');
            $table->string('kode_aset');
            $table->string('luas_tanah');
            $table->string('tahun_pengadaan');
            $table->string('alamat');
            $table->string('hak');
            $table->string('tanggal_sertifikat');
            $table->string('nomor_sertifikat');
            $table->string('penggunaan');
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
        Schema::dropIfExists('kib_as');
    }
};
