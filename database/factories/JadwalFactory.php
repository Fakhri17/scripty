<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jadwal>
 */
class JadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();

        return [
            'user_id' => $faker->randomDigit(),
            'label' => $faker->word(),
            'tanggal' => $faker->date(),
            'waktu' => $faker->time(),
            'status' => $faker->randomElement(['Diajukan', 'Diterima', 'Ditolak']),
        ];
    }
}
