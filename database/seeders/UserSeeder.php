<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'PakGuru',
            'role' => 'admin',
            'email' => 'adminsma@404.com',
            'password' => bcrypt('admin')
        ]);
        DB::table('users')->insert([
            'siswa_id' => 1,                                                                                                     
            'name' => 'Fawwaz Bayureksa',
            'role' => 'siswa',         
            'email' => 'fawwazbayureksa@404.com',
            'password' => bcrypt('fawaz123')
        ]);
        DB::table('users')->insert([
            'siswa_id' => 2,                                                                                                     
            'name' => 'Nurjannah Maulinda',
            'role' => 'siswa',         
            'email' => 'nurjannahmaulinda@404.com',
            'password' => bcrypt('nanna123')
        ]);
    }
}
