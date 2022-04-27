<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPanenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_panen', function (Blueprint $table) {
            $table->id();
            $table->date('tanggalMulai');
            $table->integer('jumlahBaglog');
            $table->string('musim');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();

            $table->foreign('user_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_panen');
    }
}
