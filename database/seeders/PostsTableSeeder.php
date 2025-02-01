<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post   =
        [
        ['title' => 'Tips cepat Kaya', 'content' => 'lorem ipsum'],
        ['title' => 'Haruskah menunda Belajar?', 'content' => 'lorem ipsum'],
        ['title' => 'Membangun visi misi kesuksesan', 'content' => 'lorem ipsum'],

        ];

    }
}
