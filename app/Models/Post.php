<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            'title' => 'Post pertama',
            'slug' => 'post-pertama',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, blanditiis harum vel saepe voluptates at explicabo in odio unde numquam distinctio voluptate, voluptas quo accusantium, minus a commodi molestiae adipisci! Repellendus distinctio optio quae maiores libero vitae consectetur tempore soluta? Quae voluptate eius harum esse voluptas quod optio repellat officia!'
        ],
        [
            'title' => 'Post kedua',
            'slug' => 'post-kedua',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, blanditiis harum vel saepe voluptates at explicabo in odio unde numquam distinctio voluptate, voluptas quo accusantium, minus a commodi molestiae adipisci! Repellendus distinctio optio quae maiores libero vitae consectetur tempore soluta? Quae voluptate eius harum 22222222222222222222222222222'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
