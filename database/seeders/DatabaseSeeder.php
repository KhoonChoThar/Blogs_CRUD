<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
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
        User::truncate();
        Category::truncate();
        Blog::truncate();

        $mgmg = User::factory()->create(['name' => 'mgmg', 'username' => 'mgmg']);
        $kacy = User::factory()->create(['name' => 'kacy', 'username' => 'kacy']);
        $zhn = User::factory()->create(['name' => 'zhn', 'username' => 'zhn']);
        $frontend = Category::factory()->create(['name' => 'frontend', 'slug' => 'frontend']);
        $backend = Category::factory()->create(['name' => 'backtend', 'slug' => 'backend']);


        Blog::factory(2)->create(['category_id' => $frontend->id, 'user_id' => $mgmg->id]);
        Blog::factory(2)->create(['category_id' => $backend->id, 'user_id' => $kacy->id]);
        Blog::factory(2)->create(['category_id' => $backend->id, 'user_id' => $zhn->id]);
        Blog::factory(25)->create(['category_id' => 1]);
        Blog::factory(25)->create(['category_id' => 2]);
    }
}
