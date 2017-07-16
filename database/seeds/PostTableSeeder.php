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
        App\Post1::create([
          'title' => 'con dien',
          'content' => 'o how does this apply to the issue at hand? Well, we will create an event that gets fired on every load of a post. Then, in some other part of the application, we can hook into that event and increment our view counter. This allows us to extract this kind of logic out of the controller and into a dedicated class, keeping our controllers clean and free of non-request related logic.'
        ]);

        App\Post1::create([
          'title' => 'con dien 1 nay nhe',
          'content' => 'o how does this apply to the issue at hand? Well, we will create an event that gets fired on every load of a post. Then, in some other part of the application, we can hook into that event and increment our view counter. This allows us to extract this kind of logic out of the controller and into a dedicated class, keeping our controllers clean and free of non-request related logic.'
        ]);

        App\Post1::create([
          'title' => 'con dien 2 nay nhe nhe',
          'content' => 'o how does this apply to the issue at hand? Well, we will create an event that gets fired on every load of a post. Then, in some other part of the application, we can hook into that event and increment our view counter. This allows us to extract this kind of logic out of the controller and into a dedicated class, keeping our controllers clean and free of non-request related logic.'
        ]);

        App\Post1::create([
          'title' => 'con dien 3 nay nay nay',
          'content' => 'o how does this apply to the issue at hand? Well, we will create an event that gets fired on every load of a post. Then, in some other part of the application, we can hook into that event and increment our view counter. This allows us to extract this kind of logic out of the controller and into a dedicated class, keeping our controllers clean and free of non-request related logic.'
        ]);
    }
}
