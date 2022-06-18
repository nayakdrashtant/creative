<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\User;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::truncate();
        $user = User::where('email', 'nick.reynolds@domain.co')->first();
        $albums = [
            [
                "user_id" => $user->id,
                "title" => "Nandhaka Pieris",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" => "img/landscape1.jpeg",
                "created_at" => "2015-05-01",
                "featured" => true
            ],
            [
                "user_id" => $user->id,
                "title" => "New West Calgary",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" => "img/landscape2.jpeg",
                "created_at" => "2016-05-01",
                "featured" => false
            ],
            [
                "user_id" => $user->id,
                "title" => "Australian Landscape",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" => "img/landscape3.jpeg",
                "created_at" => "2015-02-02",
                "featured" => false
            ],
            [
                "user_id" => $user->id,
                "title" => "Halvergate Marsh",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" => "img/landscape4.jpeg",
                "created_at" => "2014-04-01",
                "featured" => true
            ],
            [
                "user_id" => $user->id,
                "title" => "Rikkis Landscape",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" => "img/landscape5.jpeg",
                "created_at" => "2010-09-01",
                "featured" => false
            ],
            [
                "user_id" => $user->id,
                "title" => "Kiddi Kristjans Iceland",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" => "img/landscape6.jpeg",
                "created_at" => "2015-07-21",
                "featured" => true
            ]
        ];
        foreach ($albums as $album) {
            Album::create($album);
        }
    }
}
