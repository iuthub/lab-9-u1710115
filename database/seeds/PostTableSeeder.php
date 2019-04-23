<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
        		'title' => 'Learn Laravel',
        		'content' => 'This blog will take you right though the Laravel application'	
        		]);
        $post->save();
        $post = new \App\Post([
        		'title' => 'Bla bla bla',
        		'content' => 'LAravel others blog contents'	
        		]);
        $post->save();
    }
}
