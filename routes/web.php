<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" =>"Home"
    ]);
});

Route::get('about', function () {
    return view('about', [
        "tittle" =>"About",
        "name" => "Farhat Aldjaidi",
        "email" => "farhataldjaidi@gmail.com",
        "image" => "profile.jpg"
    ]);
});


Route::get('blog', function () {
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Farhat Aldjaidi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia sit accusantium asperiores, minima aliquid vel enim saepe rem incidunt, vitae excepturi ipsum ab cumque! "
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dikdik Nur Ilahi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quis corrupti magni, esse quidem magnam repellat hic maiores, saepe facere harum nulla libero rem quod suscipit quam. "
        ]
    ];
    return view('posts', [
        "tittle" =>"Posts",
        "posts" => $blog_posts
    ]);
});


// Halaman single post

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Farhat Aldjaidi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia sit accusantium asperiores, minima aliquid vel enim saepe rem incidunt, vitae excepturi ipsum ab cumque! Labore voluptate veritatis similique officiis sint natus saepe veniam ducimus iusto, consequuntur ratione ipsa repudiandae excepturi debitis doloremque minima eveniet minus odit autem! At error excepturi consequuntur quidem veritatis? Rem possimus, ea, fuga architecto nemo quisquam corrupti voluptates dicta quo repellat dolores rerum. Voluptas ut harum eligendi delectus voluptate, ipsum repellendus nisi perferendis? Nam, quos. Ab?"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dikdik Nur Ilahi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quis corrupti magni, esse quidem magnam repellat hic maiores, saepe facere harum nulla libero rem quod suscipit quam, laudantium amet nobis? Doloribus ut facilis atque voluptatum id velit odit nobis nam. Quae, maiores quasi aut possimus vitae sequi debitis minus soluta neque aliquam, rem nemo tempora explicabo ea totam, iste beatae ad inventore dicta dolorum. Nesciunt facilis delectus similique, libero odio aut porro ex est facere quibusdam exercitationem perferendis excepturi veritatis nam hic placeat doloremque dolorem esse soluta necessitatibus perspiciatis harum vel? Vero, illo deserunt. Quidem accusamus deleniti aliquid ab earum."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;

    }
}

    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});
