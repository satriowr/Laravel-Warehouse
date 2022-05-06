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
