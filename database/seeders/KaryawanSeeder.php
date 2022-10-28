<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = [
            [
                'nama' => 'Mila',
                'kode' => '001',
            ],
            [
                'nama' => 'Dani',
                'kode' => '002',
            ],
            [
                'nama' => 'Urif',
                'kode' => '003',
            ],
           
        ];
        foreach($karyawan as $krn) {
            \App\Models\Karyawan::firstOrCreate($krn);
        }
    }
}
