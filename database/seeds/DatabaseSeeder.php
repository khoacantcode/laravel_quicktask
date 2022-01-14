<?php

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
        DB::table('users')->insert([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make('admin123123'),
        ]);

        DB::table('category')->insert([
            'cate_name' => "Machine Learning",
        ]);

        DB::table('category')->insert([
            'cate_name' => "Deep Learning",
        ]);

        DB::table('category')->insert([
            'cate_name' => "Computer Vision",
        ]);

        DB::table('post')->insert([
            'post_title' => "post 1",
            'post_content' => "content post 1",
            'post_cate' => 1,
            'post_author' => 1,
        ]);

        DB::table('post')->insert([
            'post_title' => "post 2",
            'post_content' => "content post 2",
            'post_cate' => 2,
            'post_author' => 1,
        ]);

        DB::table('post')->insert([
            'post_title' => "post 3",
            'post_content' => "content post 3",
            'post_cate' => 3,
            'post_author' => 1,
        ]);
    }

}
