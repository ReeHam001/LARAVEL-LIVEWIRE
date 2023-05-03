<?php

namespace Database\Seeders;

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

        // for delete old images and create new - glob: global
        $images = glob(public_path('images/*.*'));  // images/*.* all images and extension حدد
        foreach ($images as $image) {
            unlink($image);
        }

        \App\Models\User::factory(10)->create();  // make 10 user
        \App\Models\Post::factory(2)->create();  // make 50 posts
    }
}
