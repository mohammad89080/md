<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $products = [
            [
                'name' => 'White Masterbatch',
                'description' => 'High quality white masterbatch for polyolefin applications.',
                'image' => 'white_masterbatch.png',
                'slug' => 'white-masterbatch',
            ],
            [
                'name' => 'Black Masterbatch',
                'description' => 'Used in a wide range of plastic coloring solutions.',
                'image' => 'black_masterbatch.png',
                'slug' => 'black-masterbatch',
            ],
            [
                'name' => 'Color Masterbatch - Red',
                'description' => 'Premium red color masterbatch for vivid applications.',
                'image' => 'red_masterbatch.png',
                'slug' => 'color-masterbatch-red',
            ],
            [
                'name' => 'Color Masterbatch - Blue',
                'description' => 'Strong blue coloring solution for plastics.',
                'image' => 'blue_masterbatch.png',
                'slug' => 'color-masterbatch-blue',
            ],
            [
                'name' => 'Color Masterbatch - Green',
                'description' => 'High-quality green pigment masterbatch.',
                'image' => 'green_masterbatch.png',
                'slug' => 'color-masterbatch-green',
            ],
            [
                'name' => 'Additive Masterbatch - UV',
                'description' => 'Provides UV protection for outdoor applications.',
                'image' => 'uv_additive.png',
                'slug' => 'additive-masterbatch-uv',
            ],
           
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
