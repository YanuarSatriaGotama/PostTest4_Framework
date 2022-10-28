<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Elektronik>
 */
class ElektronikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
    return [
    'nama' => fake()->name(),
    'kode' => fake()->randomNumber(9, true),
    'karyawan_id' => fake()->numberBetween(1, 3),
    ];
}
}
