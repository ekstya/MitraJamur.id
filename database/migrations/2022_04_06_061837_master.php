<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Master extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('username');
            $table->string('password');
            $table->string('nama_user');
            $table->string('no_hp');
            $table->string('email');
            $table->string('role');
            $table->string('id_desa');
        });
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->string('gambar_produk');
            $table->string('nama_produk');
            $table->string('harga_produk');
            $table->string('stok_produk');
            $table->string('deskripsi_produk');
        });
        Schema::create('workshop', function (Blueprint $table) {
            $table->bigIncrements('id_workshop');
            $table->string('gambar_workshop');
            $table->string('nama_workshop');
            $table->string('waktu_workshop');
            $table->string('harga_workshop');
            $table->string('deskripsi_workshop');
        });
        Schema::create('pendaftaran_workshop', function (Blueprint $table) {
            $table->bigIncrements('id_pendaftaran');
            $table->date('tgl_pendaftaran');
            $table->bigInteger('id_user');
            $table->bigInteger('id_workshop');

            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_workshop')->references('id_workshop')->on('workshop');
        });

        // Schema::create('provinsi', function (Blueprint $table) {
        //     $table->bigIncrements('id_provinsi');
        //     $table->string('nama_provinsi');
        // });

        // Schema::create('kabupaten', function (Blueprint $table) {
        //     $table->bigIncrements('id_kabupaten');
        //     $table->string('nama_kabupaten');
        // });

        // Schema::create('kecamatan', function (Blueprint $table) {
        //     $table->bigIncrements('id_kecamatan');
        //     $table->string('nama_kecamatan');
        // });

        // Schema::create('desa', function (Blueprint $table) {
        //     $table->bigIncrements('id_desa');
        //     $table->string('nama_desa');
        // });

        // Schema::create('pembayaran', function (Blueprint $table) {
        //     $table->bigIncrements('id_pembayaran');
        //     $table->date('tgl_pembayaran');
        //     $table->string('status_pembayaran');
        // });

        // Schema::create('pemesanan', function (Blueprint $table) {
        //     $table->bigIncrements('id_pemesanan');
        //     $table->date('tgl_pemesanan');
        //     $table->string('status_pembayaran');
        //     $table->bigInteger('id_user');
        //     $table->bigInteger('id_pembayaran');

        //     $table->foreign('id_user')->references('id_user')->on('user');
        //     $table->foreign('id_pembayaran')->references('id_pembayaran')->on('pembayaran');
        // });
        
        // Schema::create('jadwal_panen', function (Blueprint $table) {
        //     $table->bigIncrements('id_jadwal');
        //     $table->date('tgl_mulai');
        //     $table->integer('jumlah_baglog');
        //     $table->string('musim');
        //     $table->integer('id_user');

        //     $table->foreign('id_user')->references('id_user')->on('user');
        // });

        // Schema::create('detail_pemesanan', function (Blueprint $table) {
        //     $table->integer('id_pemesanan');
        //     $table->integer('id_produk');
        //     $table->integer('qty');

        //     $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanan');
        //     $table->foreign('id_produk')->references('id_produk')->on('produk');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('user');
        Schema::dropIfExists('produk');
        Schema::dropIfExists('workshop');
    }
}
