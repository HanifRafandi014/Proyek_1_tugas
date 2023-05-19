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
            $table->unsignedBigInteger('staff_gudang_id')->nullable();
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->integer('jumlah');
            $table->integer('harga');
            $table->integer('total');
            $table->date('tanggal_keluar');
            $table->foreign('staff_gudang_id')->references('id')->on('staff_gudang');
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
