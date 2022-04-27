<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranWorkshopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_workshop', function (Blueprint $table) {
            $table->id();
            $table->date('tanggalPendaftaran');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('workshop_id');
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('workshop_id')->references('id')->on('workshop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran_workshop');
    }
}
