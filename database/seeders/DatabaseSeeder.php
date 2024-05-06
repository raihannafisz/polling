<?php

namespace Database\Seeders;

use App\Models\Poll;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Choice;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Wardana dana',
            'email' => 'wardana@example.com',
            'password' => 'lalala123',
        ]);

        User::create([
            'name' => 'Rianto Jaya',
            'email' => 'rianto@example.com',
            'password' => '12345678',
        ]);

        User::create([
            'name' => 'Siti Rahayu',
            'email' => 'siti@example.com',
            'password' => 'sitisiti',
        ]);

        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'password' => 'budibudi',
        ]);

        User::create([
            'name' => 'Eka Putri',
            'email' => 'eka@example.com',
            'password' => 'ekae123',
        ]);
    }
}
