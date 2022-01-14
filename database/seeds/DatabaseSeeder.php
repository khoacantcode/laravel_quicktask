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
            'post_title' => "What is Machine Learning? A Definition.",
            'post_content' => "Machine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed. Machine learning focuses on the development of computer programs that can access data and use it to learn for themselves.

            The process of learning begins with observations or data, such as examples, direct experience, or instruction, in order to look for patterns in data and make better decisions in the future based on the examples that we provide. The primary aim is to allow the computers learn automatically without human intervention or assistance and adjust actions accordingly.
            
            But, using the classic algorithms of machine learning, text is considered as a sequence of keywords; instead, an approach based on semantic analysis mimics the human ability to understand the meaning of a text.",
            'post_cate' => 1,
            'post_author' => 1,
        ]);

        DB::table('post')->insert([
            'post_title' => "What Is Deep Learning? 3 things you need to know",
            'post_content' => "Deep learning is a machine learning technique that teaches computers to do what comes naturally to humans: learn by example. Deep learning is a key technology behind driverless cars, enabling them to recognize a stop sign, or to distinguish a pedestrian from a lamppost. It is the key to voice control in consumer devices like phones, tablets, TVs, and hands-free speakers. Deep learning is getting lots of attention lately and for good reason. It’s achieving results that were not possible before.

            In deep learning, a computer model learns to perform classification tasks directly from images, text, or sound. Deep learning models can achieve state-of-the-art accuracy, sometimes exceeding human-level performance. Models are trained by using a large set of labeled data and neural network architectures that contain many layers.",
            'post_cate' => 2,
            'post_author' => 1,
        ]);

        DB::table('post')->insert([
            'post_title' => "What Is Computer Vision & How Does it Work? An Introduction",
            'post_content' => "Computer vision is the field of computer science that focuses on creating digital systems that can process, analyze, and make sense of visual data (images or videos) in the same way that humans do. The concept of computer vision is based on teaching computers to process an image at a pixel level and understand it. Technically, machines attempt to retrieve visual information, handle it, and interpret results through special software algorithms.",
            'post_cate' => 3,
            'post_author' => 1,
        ]);
    }
}
