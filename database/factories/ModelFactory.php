<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'status'    => 1,
        'role_id'   => 1,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Food\MenuFood\MenuFood::class,function (Faker\Generator $faker){
    $name = $faker->unique()->name;
    return [
        'name'  => $name,
        'slug'  => str_slug($name,'-'),
        'price' => $faker->randomNumber(3),
        'description'   => $faker->paragraph,
        'details'   => $faker->sentence,
        'nutrition_info'    => $faker->paragraph,
        'prep_methods'  => $faker->paragraph,
        'weight'    => $faker->randomNumber(2),
        'calories'  => $faker->randomNumber(2),
        'ingredients'   => $faker->paragraph,
        'discount'  => $faker->randomNumber(1),
    ];
});

$factory->define(\App\Food\Category\Category::class,function (Faker\Generator $faker){
   /* $name = $faker->unique()->randomElement([
        'kits and combos','suggested dishes','individual portions','snacks and sweets', 'full menu'
    ]);

   $kits = $faker->unique()->randomElement([
        'low carb','well with life ','varied','vegetarians and vegans'
    ]);
    */
   /*
   $dish = $faker->unique()->randomElement( [
       'meat','chicken','fish','vegetarians and vegans'
   ]);
   */
    $portions = $faker->unique()->randomElement([
        'proteins','carbohydrates','vegetables','pasta and sauces','soups and broths'
    ]);

    return [
        'name'      => $portions,
        'slug'      => str_slug($portions,'-'),
        'details'   => $faker->sentence,
        'description'  => $faker->paragraph,
        'parent_id'    => 4,
    ];
});

$factory->define(App\Food\Images\Images::class, function (Faker\Generator $faker){

    return [
        'label' => $faker->word,
        'menufood_id'   => rand(1,100),
        'category_id'   => rand(1,100),
        'image_url'     => 'http://via.placeholder.com/350x150'
    ];
});