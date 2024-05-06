<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'content' => 'kenapa masih ada yang memilih Messi? padahal Ronaldo lebih baik',
            'user_id' => 4, 
            'poll_id' => 1, 
        ]);

        Comment::create([
            'content' => 'Saya setuju, Ronaldo memang lebih unggul dalam beberapa aspek permainan.',
            'user_id' => 2, 
            'poll_id' => 1, 
        ]);

        Comment::create([
            'content' => 'Tapi Messi juga punya keunggulan tersendiri dalam hal teknik dan visi bermain.',
            'user_id' => 8,
            'poll_id' => 1,
        ]);

        Comment::create([
            'content' => 'Saya suka film Dune, ceritanya sangat menarik!',
            'user_id' => 5,
            'poll_id' => 3,
        ]);

        Comment::create([
            'content' => 'No Time to Die adalah film yang bagus, terutama aksi dari Daniel Craig!',
            'user_id' => 7,
            'poll_id' => 3,
        ]);

        Comment::create([
            'content' => 'Apakah ada buku lain yang lebih bagus dari Sapiens?',
            'user_id' => 3,
            'poll_id' => 4,
        ]);

        Comment::create([
            'content' => 'Saya ingin merekomendasikan buku The Alchemist karya Paulo Coelho!',
            'user_id' => 9,
            'poll_id' => 4,
        ]);

    }
}
