<?php

namespace Database\Seeders;

use App\Models\Habitlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabitLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Habitlog::factory()->count(10)->create();
    }
}
