<?php

use Illuminate\Database\Seeder;
use App\Food\Category\Category;
use App\Food\MenuFood\MenuFood;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Category::class,4)->create()->each(function (Category $category){
            factory(MenuFood::class,12)->make()->each(function (MenuFood $menuFood) use ($category){
                $category->menufood()->save($menuFood);

            });
        });
    }
}
