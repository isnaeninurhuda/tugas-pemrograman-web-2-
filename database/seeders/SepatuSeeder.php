<?php

namespace Database\Seeders;

use App\Models\Sepatu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SepatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sepatu::factory(30)->create();
    }
}
