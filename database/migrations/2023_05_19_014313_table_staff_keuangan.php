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
        Schema::create('staff_keuangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barang_masuk_id')->nullable();
            $table->unsignedBigInteger('barang_keluar_id')->nullable();
            $table->string('nama_staff_keuangan', 30);
            $table->string('no_telepon', 20);
            $table->foreign('barang_masuk_id')->references('id')->on('barang_masuk');
            $table->foreign('barang_keluar_id')->references('id')->on('barang_keluar');
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
        Schema::dropIfExists('staff_keuangan');
    }
};
