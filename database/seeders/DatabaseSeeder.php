<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //    'name' => 'Farhat Aldjaidi',
        //    'email' => 'farhataldjaidi@gmail.com',
        //    'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Dikdik Nur Ilahi',
        //     'email' => 'dikdik@gmail.com',
        //     'password' => bcrypt('12345')
        //  ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        

        // Post::create([
        //     'tittle' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, sint?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, iure. Natus quasi laboriosam amet voluptate ex libero quod deleniti quo, temporibus possimus saepe rem iure unde nostrum magni a, aperiam laudantium? Doloremque aut.</p><p> Cupiditate voluptate dolorum minima, animi amet facilis dolore illum consequatur tempore repudiandae veniam at nulla quidem obcaecati enim ipsam deleniti ducimus maxime sunt excepturi non debitis perferendis? Consequatur quos earum corporis dolorem? Quas ipsa eos architecto voluptate reiciendis animi, assumenda nisi id vero vitae consequatur quo quaerat inventore rerum repudiandae magni nam.</p><p> Temporibus numquam dicta tenetur? Consequuntur delectus reiciendis totam esse, iusto harum corporis tenetur dolorem? Odit ullam enim dolorum fuga ex autem ducimus sint quisquam quia, eum officia doloribus atque possimus esse laudantium? Nam, temporibus saepe.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, sint?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, iure. Natus quasi laboriosam amet voluptate ex libero quod deleniti quo, temporibus possimus saepe rem iure unde nostrum magni a, aperiam laudantium? Doloremque aut.</p><p> Cupiditate voluptate dolorum minima, animi amet facilis dolore illum consequatur tempore repudiandae veniam at nulla quidem obcaecati enim ipsam deleniti ducimus maxime sunt excepturi non debitis perferendis? Consequatur quos earum corporis dolorem? Quas ipsa eos architecto voluptate reiciendis animi, assumenda nisi id vero vitae consequatur quo quaerat inventore rerum repudiandae magni nam.</p><p> Temporibus numquam dicta tenetur? Consequuntur delectus reiciendis totam esse, iusto harum corporis tenetur dolorem? Odit ullam enim dolorum fuga ex autem ducimus sint quisquam quia, eum officia doloribus atque possimus esse laudantium? Nam, temporibus saepe.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, sint?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, iure. Natus quasi laboriosam amet voluptate ex libero quod deleniti quo, temporibus possimus saepe rem iure unde nostrum magni a, aperiam laudantium? Doloremque aut.</p><p> Cupiditate voluptate dolorum minima, animi amet facilis dolore illum consequatur tempore repudiandae veniam at nulla quidem obcaecati enim ipsam deleniti ducimus maxime sunt excepturi non debitis perferendis? Consequatur quos earum corporis dolorem? Quas ipsa eos architecto voluptate reiciendis animi, assumenda nisi id vero vitae consequatur quo quaerat inventore rerum repudiandae magni nam.</p><p> Temporibus numquam dicta tenetur? Consequuntur delectus reiciendis totam esse, iusto harum corporis tenetur dolorem? Odit ullam enim dolorum fuga ex autem ducimus sint quisquam quia, eum officia doloribus atque possimus esse laudantium? Nam, temporibus saepe.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, sint?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, iure. Natus quasi laboriosam amet voluptate ex libero quod deleniti quo, temporibus possimus saepe rem iure unde nostrum magni a, aperiam laudantium? Doloremque aut.</p><p> Cupiditate voluptate dolorum minima, animi amet facilis dolore illum consequatur tempore repudiandae veniam at nulla quidem obcaecati enim ipsam deleniti ducimus maxime sunt excepturi non debitis perferendis? Consequatur quos earum corporis dolorem? Quas ipsa eos architecto voluptate reiciendis animi, assumenda nisi id vero vitae consequatur quo quaerat inventore rerum repudiandae magni nam.</p><p> Temporibus numquam dicta tenetur? Consequuntur delectus reiciendis totam esse, iusto harum corporis tenetur dolorem? Odit ullam enim dolorum fuga ex autem ducimus sint quisquam quia, eum officia doloribus atque possimus esse laudantium? Nam, temporibus saepe.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
