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
$factory->define(App\Post2::class, function (Faker\Generator $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'description' => 'Trận mưa đá rơi xuống khu vực Hà Nội khiến cho người dân nơi đây ngạc nhiên, bởi là hiện tượng hiếm gặp',
        'content' => 'Trận mưa đá mỗi lúc một rơi dồn dập, bắn liên tiếp vào mái nhà khiến cho mọi người trong gia  đình tôi hết sức ngạc nhiên, bởi khoảng 15 năm trở lại đây tôi chưa từng chứng kiến trận mưa đá nào tại địa phương mình sinh sống, anh Ba, một người ở xã Đường Lâm',
    ];
});
