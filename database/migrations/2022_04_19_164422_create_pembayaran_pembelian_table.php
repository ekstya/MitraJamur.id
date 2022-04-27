<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranPembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_pembelian', function (Blueprint $table) {
            $table->id();
            $table->date('tanggalPembayaran')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pembelian_id');
            $table->string('statusPembayaran');
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('pembelian_id')->references('id')->on('pembelian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_pembelian');
    }
}
