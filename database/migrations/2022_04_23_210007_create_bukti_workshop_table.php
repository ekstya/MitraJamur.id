<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuktiWorkshopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_workshop', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pembayaran_workshop_id');
            $table->string('bukti');
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();

            $table->foreign('pembayaran_workshop_id')->references('id')->on('pembayaran_workshop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukti_workshop');
    }
}
