<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $image = fake()->imageUrl;

        // Untuk polling pertama
        Choice::create([
            'label' => 'Lionel Messi',
            'description' => 'Argentinian footballer widely regarded as one of the greatest players of all time.',
            'image' => $image,
            'poll_id' => 1,
        ]);

        Choice::create([
            'label' => 'Cristiano Ronaldo',
            'description' => 'Portuguese professional footballer known for his incredible goal-scoring record and athleticism.',
            'image' => $image,
            'poll_id' => 1,
        ]);

        // Untuk polling kedua
        Choice::create([
            'label' => 'Nasi Goreng',
            'poll_id' => 2,
        ]);

        Choice::create([
            'label' => 'Pizza',
            'poll_id' => 2,
        ]);

        // Untuk polling ketiga
        Choice::create([
            'label' => 'Dune',
            'description' => 'Science fiction novel by Frank Herbert, widely considered one of the greatest science fiction novels of all time.',
            'image' => $image,
            'poll_id' => 3,
        ]);

        Choice::create([
            'label' => 'No Time to Die',
            'description' => 'The 25th James Bond film, featuring Daniel Craig in his final appearance as Agent 007.',
            'image' => $image,
            'poll_id' => 3,
        ]);

        // Untuk polling keempat
        Choice::create([
            'label' => 'Sapiens: A Brief History of Humankind',
            'image' => $image,
            'poll_id' => 4,
        ]);

        Choice::create([
            'label' => 'The Great Gatsby',
            'image' => $image,
            'poll_id' => 4,
        ]);

    }
}
