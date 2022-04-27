<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuktiPembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_pembelian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pembayaran_pembelian_id');
            $table->string('bukti');
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();

            $table->foreign('pembayaran_pembelian_id')->references('id')->on('pembayaran_pembelian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukti_pembelian');
    }
}
