<?php

namespace App\Models;

class post
{
         private static $blog_posts = [
            [
                "title" => "Judul Post Pertama",
                "slug"  => "judul-post-pertama",
                "author" => "Jonathan Pandu",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, beatae quis! Nisi nostrum reprehenderit, unde quis illum voluptates possimus, impedit esse officiis distinctio natus provident error suscipit ducimus voluptate quasi! Eum cupiditate ad quaerat quia omnis necessitatibus eveniet at maiores aliquid reprehenderit saepe dicta fugiat sequi, consequuntur atque quos est debitis quis quas dolorum voluptatum sunt. Placeat quae maxime laborum modi sint doloribus,
                qui nesciunt tenetur doloremque neque! Modi vero minima ad delectus repellat quidem fugiat maxime tenetur omnis odio!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita asperiores animi at obcaecati odio. Voluptate veritatis fugiat quam laborum dignissimos.
                 Dignissimos veritatis assumenda qui minima dolore asperiores ullam temporibus magni!",
            ],

        [
            "title" => "Judul Post Kedua",
            "slug"  => "judul-post-kedua",
            "author" => "Doddy ferdianyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, beatae quis! Nisi nostrum reprehenderit, unde quis illum voluptates possimus, impedit esse officiis distinctio natus provident error suscipit ducimus voluptate quasi! Eum cupiditate ad quaerat quia omnis necessitatibus eveniet at maiores aliquid reprehenderit saepe dicta fugiat sequi, consequuntur atque quos est debitis quis quas dolorum voluptatum sunt. Placeat quae maxime laborum modi sint doloribus,
            qui nesciunt tenetur doloremque neque! Modi vero minima ad delectus repellat quidem fugiat maxime tenetur omnis odio!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita asperiores animi at obcaecati odio. Voluptate veritatis fugiat quam laborum dignissimos.
             Dignissimos veritatis assumenda qui minima dolore asperiores ullam temporibus magni!",

           ],
        ];

        public static function all()
        {
             return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
             $posts = static::all();
              return $posts->firstWhere('slug',$slug);

      }
    }

