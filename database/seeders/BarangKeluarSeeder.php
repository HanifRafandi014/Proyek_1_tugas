<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang_keluar')->insert([
            'staff_gudang_id'=> '1',
            'barang_id'=> '1',
            'jumlah'=> 7,
            'harga'=> 20000,
            'total'=> 140000,
            'tanggal_keluar'=> '2003-03-22',
        ]);
    }
}
