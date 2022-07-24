<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       

        //  User::create([
        //    'name' => 'Firda Rosiana',
        //     'email' => 'firdarosiana@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        
        //////////////////////////////

        User::factory(5)->create();

        Category::create([
        'name' => 'Code',
        'slug' => 'code'
        ]);

        Category::create([
        'name' => 'UI/UX Design',
        'slug' => 'uiux-design'
        ]);

        Category::create([
            'name' => 'Full-Stack',
            'slug' => 'full-stack'
        ]);

        Category::create([
            'name' => 'Flutter',
            'slug' => 'flutter'
        ]);

        Category::create([
            'name' => 'Dart',
            'slug' => 'dart'
        ]);

        
        Category::create([
            'name' => 'Mobile',
            'slug' => 'mobile'
        ]);

        Post::factory(25)->create();
        ///////////////////////////////

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis maiores, obcaecati reprehenderit eum voluptatibus cupiditate ipsam, consequuntur',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis maiores, obcaecati reprehenderit eum voluptatibus cupiditate ipsam, consequuntur explicabo optio, fugiat aut. Harum culpa omnis maiores veritatis esse, nostrum mollitia illum?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam blanditiis optio quas temporibus doloribus consectetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quod natus. Ipsum, eos dicta iste accusantium vero alias temporibus provident!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci assumenda aliquid, in fuga odit vero architecto necessitatibus aperiam nam, delectus eius inventore ratione quam, itaque exercitationem laboriosam suscipit debitis reiciendis culpa deleniti repellat earum beatae distinctio numquam! Id doloribus placeat, beatae vero laboriosam quos libero voluptas perspiciatis natus ratione quasi?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis maiores, obcaecati reprehenderit eum voluptatibus cupiditate ipsam, consequuntur',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis maiores, obcaecati reprehenderit eum voluptatibus cupiditate ipsam, consequuntur explicabo optio, fugiat aut. Harum culpa omnis maiores veritatis esse, nostrum mollitia illum?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam blanditiis optio quas temporibus doloribus consectetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quod natus. Ipsum, eos dicta iste accusantium vero alias temporibus provident!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci assumenda aliquid, in fuga odit vero architecto necessitatibus aperiam nam, delectus eius inventore ratione quam, itaque exercitationem laboriosam suscipit debitis reiciendis culpa deleniti repellat earum beatae distinctio numquam! Id doloribus placeat, beatae vero laboriosam quos libero voluptas perspiciatis natus ratione quasi?</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis maiores, obcaecati reprehenderit eum voluptatibus cupiditate ipsam, consequuntur',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis maiores, obcaecati reprehenderit eum voluptatibus cupiditate ipsam, consequuntur explicabo optio, fugiat aut. Harum culpa omnis maiores veritatis esse, nostrum mollitia illum?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam blanditiis optio quas temporibus doloribus consectetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quod natus. Ipsum, eos dicta iste accusantium vero alias temporibus provident!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci assumenda aliquid, in fuga odit vero architecto necessitatibus aperiam nam, delectus eius inventore ratione quam, itaque exercitationem laboriosam suscipit debitis reiciendis culpa deleniti repellat earum beatae distinctio numquam! Id doloribus placeat, beatae vero laboriosam quos libero voluptas perspiciatis natus ratione quasi?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis maiores, obcaecati reprehenderit eum voluptatibus cupiditate ipsam, consequuntur',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis maiores, obcaecati reprehenderit eum voluptatibus cupiditate ipsam, consequuntur explicabo optio, fugiat aut. Harum culpa omnis maiores veritatis esse, nostrum mollitia illum?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam blanditiis optio quas temporibus doloribus consectetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quod natus. Ipsum, eos dicta iste accusantium vero alias temporibus provident!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci assumenda aliquid, in fuga odit vero architecto necessitatibus aperiam nam, delectus eius inventore ratione quam, itaque exercitationem laboriosam suscipit debitis reiciendis culpa deleniti repellat earum beatae distinctio numquam! Id doloribus placeat, beatae vero laboriosam quos libero voluptas perspiciatis natus ratione quasi?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
