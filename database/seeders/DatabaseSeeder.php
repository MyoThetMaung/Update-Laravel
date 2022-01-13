<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Blog;

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
        Blog::truncate();
        Category::truncate();                                                                               //truncate means delete all before seeding

        $mgmg = User::factory()->create(['name'=>'mgmg', 'username'=>'mgmg']);
        $agag = User::factory()->create(['name'=>'agag', 'username'=>'agag']);
        $frontend = Category::factory()->create(['name'=>'frontend', 'filename'=>'frontend']);
        $backend = Category::factory()->create(['name'=>'backend', 'filename'=>'backend']);
        Blog::factory(2)->create(['category_id'=>$frontend->id, 'user_id'=>$mgmg->id]);
        Blog::factory(2)->create(['category_id'=>$backend->id, 'user_id'=>$agag->id]);
    }
}
