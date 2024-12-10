<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'ROFI NUGRAHA',
            'email' => 'admin@gmail.com',
            'usertype' => 'admin',
            'password' => '$2y$12$p0ZmZTGs1m1XTISFdumlyuPZa4BG4aAYN20VH3InBCvAaQpyanOiu',
        ]);
    }
}