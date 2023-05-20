<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=[
         [
        'user_id' => '1',
        'title' => 'Posts',
        'post_image' => 'osama.png',
        'body' => 'hrdddddddd'
             
        ],
             [
        'user_id' => '2',
        'title' => 'Posts2',
        'post_image' => 'osama.jpg',
        'body' => 'hrdddddddd'
             
        ]
    ];
        
        foreach($posts as $post=>$value) {
            
           Post::create($value); 
        }
        
    }
}
