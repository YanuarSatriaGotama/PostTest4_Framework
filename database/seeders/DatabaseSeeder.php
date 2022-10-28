<?php

namespace Database\Seeders;
use App\Models\Elektronik;
Elektronik::factory(10);
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ElektronikSeeder::class]);
        $this->call([KaryawanSeeder::class]);
    }
}
