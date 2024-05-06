<?php

namespace Database\Seeders;

use App\Models\Poll;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $image = fake()->imageUrl;

        Poll::create([
            'title' => 'Siapakah Pemain Sepakbola terbaik?',
            'category' => 'Olahraga',
            'description' => 'Kita masih memperdebatkan siapakah pemain bola terbaik menurut kalian?',
            'image' => $image,
            'password' => null,
            'security' => 1,
            'user_id' => 2,
        ]);

        Poll::create([
            'title' => 'Apa Makanan Favorit Anda?',
            'category' => 'Makanan',
            'description' => 'Bagikan makanan favorit Anda!',
            'image' => $image,
            'password' => null,
            'security' => 2,
            'user_id' => 3,
        ]);

        Poll::create([
            'title' => 'Film Favorit Tahun Ini?',
            'category' => 'Film',
            'description' => 'Bagikan film favorit Anda tahun ini!',
            'image' => $image,
            'password' => null,
            'security' => 1,
            'user_id' => 4,
        ]);

        Poll::create([
            'title' => 'Buku Terbaik yang Pernah Anda Baca?',
            'category' => 'Buku',
            'description' => 'Bagikan buku terbaik yang pernah Anda baca!',
            'image' => $image,
            'password' => null,
            'security' => 2,
            'user_id' => 5,
        ]);

    }
}
