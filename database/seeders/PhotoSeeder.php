<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_one = Category::create(
            [
                'category_name' => 'WORDPRESS',
            ]
        );
$category_two = Category::create(
            [
                'category_name' => 'PHP',
            ]
        );
$category_three = Category::create(
            [
                'category_name' => 'PYTHON',
            ]
        );
$category_four = Category::create(
            [
                'category_name' => 'JAVASCRIPT',
            ]
        );
$category_five = Category::create(
            [
                'category_name' => 'JAVA',
            ]
        );

        DB::table('photos')->insert([
            [
                'photo' => 'https://freepngimg.com/thumb/mario/20698-7-mario-transparent-background.png',
                'category_id' => $category_one->id,
            ],
            [
                'photo' => 'https://freepngimg.com/thumb/mario/20698-7-mario-transparent-background.png',
                'category_id' =>  $category_two->id,
            ],
            [
                'photo' => 'https://freepngimg.com/thumb/mario/20698-7-mario-transparent-background.png',
                'category_id' =>  $category_three->id,
            ],
            [
                'photo' => 'https://freepngimg.com/thumb/mario/20698-7-mario-transparent-background.png',
                'category_id' =>  $category_four->id,
            ],
            [
                'photo' => 'https://freepngimg.com/thumb/mario/20698-7-mario-transparent-background.png',
                'category_id' =>  $category_five->id,
            ],
        ]);
    }
}
