<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('namaUser');
            $table->string('noHp');
            $table->string('email')->unique();
            $table->string('role');
            $table->unsignedBigInteger('desa_id')->nullable();
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();

            $table->foreign('desa_id')->references('id')->on('desa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
