<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => bcrypt('1234')
        ]);

        Category::create([
            'name' => 'progamming',
            'slug' => 'progamming'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'judul pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'sebuah judul yang terasa biasa saja yaitu judul pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur pariatur quas quidem ad, fugiat nemo voluptates tempore, hic nostrum aut impedit nulla esse ratione, sapiente odio consequuntur excepturi quasi placeataspernatur. Fugit fuga rem sequi sint, architecto necessitatibus autem ipsa ipsum, enim blanditiis eos amet eaque, autquaerat vero at'
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'judul kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'sebuah judul yang terasa biasa saja yaitu judul kedua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur pariatur quas quidem ad, fugiat nemo voluptates tempore, hic nostrum aut impedit nulla esse ratione, sapiente odio consequuntur excepturi quasi placeataspernatur. Fugit fuga rem sequi sint, architecto necessitatibus autem ipsa ipsum, enim blanditiis eos amet eaque, autquaerat vero at'
        ]);

        Post::create([
            'category_id' => 2,
            'user_id' => 1,
            'title' => 'judul ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'sebuah judul yang terasa biasa saja yaitu judul ketiga',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur pariatur quas quidem ad, fugiat nemo voluptates tempore, hic nostrum aut impedit nulla esse ratione, sapiente odio consequuntur excepturi quasi placeataspernatur. Fugit fuga rem sequi sint, architecto necessitatibus autem ipsa ipsum, enim blanditiis eos amet eaque, autquaerat vero at'
        ]);
    }
}
