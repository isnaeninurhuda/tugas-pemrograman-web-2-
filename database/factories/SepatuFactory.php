<?php

namespace Database\Factories;

use App\Models\Sepatu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sepatu>
 */
class SepatuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->randomElement([
                'Air Force 1',
                'Air Jordan 1',
                'Dunk Low',
                'Yeezy Boost 350',
                'Ultraboost',
                'Samba OG',
                'Chuck 70',
                'Old Skool',
                'Gel-Kayano 14',
            ]),
            'brand' => fake()->randomElement(['Nike', 'Adidas', 'Converse', 'Vans', 'Asics', 'New Balance']),
            'ukuran' => fake()->randomElement([38, 39, 40, 41, 42, 42.5, 43, 44]),
            'warna' => fake()->randomElement(['Putih', 'Hitam', 'Merah', 'Biru', 'Abu-abu', 'Hijau']),
            'harga_beli' => fake()->numberBetween(5, 40) * 100000
        ];
    }
}
