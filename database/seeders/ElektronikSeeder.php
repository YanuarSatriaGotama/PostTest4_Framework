<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElektronikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $elektronik = [
            [
                'nama_barang' => 'Kipas Miyako',
                'harga' => '20000',
                'jenis' => 'Kipas',
                'karyawan_id' => '1',
            ],
            [
                'nama_barang' => 'Kulkas Toshiba',
                'harga' => '200000',
                'jenis' => 'Kulkas',
                'karyawan_id' => '2',
            ],
            [
                'nama_barang' => 'Lampu Philip',
                'harga' => '12000',
                'jenis' => 'Lampu',
                'karyawan_id' => '3',
            ],
            [
                'nama_barang' => 'Ac Changhong',
                'harga' => '300000',
                'jenis' => 'Ac',
                'karyawan_id' => '1',
            ],
            [
                'nama_barang' => 'Lampu Shukaku',
                'harga' => '24000',
                'jenis' => 'Lampu',
                'karyawan_id' => '2',
            ]
        ];
        $this->call([KaryawanSeeder::class]);
        foreach ($elektronik as $el) {
            \App\Models\Elektronik::firstOrCreate($el);
        }
    }
}
