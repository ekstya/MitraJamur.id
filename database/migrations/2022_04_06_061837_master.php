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
