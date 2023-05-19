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
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->string('jumlah');
            $table->string('harga');
            $table->string('total');
            $table->dateTime('tanggal_keluar');
            $table->foreign('staff_id')->references('id')->on('staff');
            $table->foreign('barang_id')->references('id')->on('barang');
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
        Schema::dropIfExists('barang_keluar');
    }
};
