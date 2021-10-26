<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Fawwaz Bayureksa',
            'nis' =>101,
            'tgl_lahir' => '2000-06-04'
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Nasrullah',
            'nis' =>102,
            'tgl_lahir' => '1999-07-20'
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Nurjannah Maulinda',
            'nis' =>103,
            'tgl_lahir' => '2000-06-08'
        ]);
    }
}
