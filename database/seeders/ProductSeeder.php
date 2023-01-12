<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::query()->insert([
            [
                'name' => 'Blue T-shirt',
                'price' => 10000,
                'description' =>'Great Blue Shirt',
                'stock' => 20,
                'image' => "images/2.jpg"
            ],
            [
                'name' => 'Red T-shirt',
                'price' => 10000,
                'description' =>'Great Red Shirt',
                'stock' => 20,
                'image' => 'images/1.jpg'
            ],
            [
                'name' => 'Yellow T-shirt',
                'price' => 30000,
                'description' =>'Perfect Yellow Shirt',
                'stock' => 20,
                'image' => 'images/3.jpg'
            ],
            [
                'name' => 'Hype Beast Jacket',
                'price' => 20000,
                'description' =>'Cool Jacket',
                'stock' => 20,
                'image' => 'images/4.jpg'
            ],
            [
                'name' => 'Purple Jacket',
                'price' => 10000,
                'description' =>'Cool Purple Jacket',
                'stock' => 20,
                'image' => 'images/5.jpg'
            ],
            [
                'name' => 'Black Short',
                'price' => 10000,
                'description' =>'Simple Black Short',
                'stock' => 20,
                'image' => 'images/6.jpg'
            ],
            [
                'name' => 'Blue Short',
                'price' => 10000,
                'description' =>'Great Blue Short',
                'stock' => 20,
                'image' => 'images/7.jpg'
            ],
            [
                'name' => 'Black Hoodie',
                'price' => 10000,
                'description' =>'Cool and Simple Hoodie',
                'stock' => 20,
                'image' => 'images/8.jpg'
            ],
            [
                'name' => 'White T-shirt',
                'price' => 45000,
                'description' =>'Simple T-shirt',
                'stock' => 20,
                'image' => 'images/9.jpg'
            ],
            [
                'name' => 'Yellow Skirt',
                'price' => 50500,
                'description' =>'Beautiful Skirt',
                'stock' => 20,
                'image' => 'images/10.jpg'
            ],
            [
                'name' => 'Purple Hoodie',
                'price' => 80500,
                'description' =>'Cool Purple Hoodie',
                'stock' => 20,
                'image' => 'images/11.jpg'
            ],
            [
                'name' => 'Zig Zag Shirt',
                'price' => 40000,
                'description' =>'Amazing Zig Zag Shirt',
                'stock' => 20,
                'image' => 'images/12.jpg'
            ],
            [
                'name' => 'Orange Short',
                'price' => 8000,
                'description' =>'Simple Orange Short',
                'stock' => 20,
                'image' => 'images/13.jpg'
            ],
            [
                'name' => 'Long Jeans',
                'price' => 70000,
                'description' =>'Long Jeans',
                'stock' => 20,
                'image' => 'images/14.jpg'
            ],
            [
                'name' => 'Green Jacket',
                'price' => 10000,
                'description' =>'Cool Green Jacket',
                'stock' => 20,
                'image' => 'images/15.jpg'
            ],
            [
                'name' => 'White Hoodie',
                'price' => 11000,
                'description' =>'Simple and Cool White Hoodie',
                'stock' => 20,
                'image' => 'images/16.jpg'
            ],
        ]);
    }
}
