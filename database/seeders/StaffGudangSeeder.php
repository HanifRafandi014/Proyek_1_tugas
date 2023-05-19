<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffGudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff_gudang')->insert([
            'nama_staff_gudang'=> 'Kholid Maulidi',
            'no_telepon'=> '087750897177'
        ]);
    }
}
