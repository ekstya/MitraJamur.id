<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop', function (Blueprint $table) {
            $table->id();
            $table->string('gambarWorkshop');
            $table->string('namaWorkshop');
            $table->date('waktuWorkshop');
            $table->integer('hargaWorkshop');
            $table->text('deskripsiWorkshop');
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshop');
    }
}
