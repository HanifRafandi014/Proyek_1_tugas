<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffKeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff_keuangan')->insert([
            'barang_masuk_id'=> '1',
            'barang_keluar_id'=> '1',
            'nama_staff_keuangan'=> 'Aprilia Echa',
            'no_telepon'=> '082610739921'
        ]);
    }
}
