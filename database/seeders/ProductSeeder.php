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
                'image' => 'https://tinyurl.com/2xp4vbdv',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Red T-shirt',
                'price' => 10000,
                'image' => 'https://tinyurl.com/ye8w2e7m',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Yellow T-shirt',
                'price' => 30000,
                'image' => 'https://tinyurl.com/54yhjnj7',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Hype Beast Jacket',
                'price' => 20000,
                'image' => 'https://tinyurl.com/ytft6kc8',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Purple Jacket',
                'price' => 10000,
                'image' => 'https://tinyurl.com/24w3yd4x',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Black Short',
                'price' => 10000,
                'image' => 'https://tinyurl.com/24m7rtaa',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Blue Short',
                'price' => 10000,
                'image' => 'https://tinyurl.com/2wxd6kcd',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Black Hoodie',
                'price' => 10000,
                'image' => 'https://tinyurl.com/3smmdnhp',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'White T-shirt',
                'price' => 45000,
                'image' => 'https://tinyurl.com/334mmb6r',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Yellow Skirt',
                'price' => 50500,
                'image' => 'https://tinyurl.com/2rypry6v',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Purple Hoodie',
                'price' => 80500,
                'image' => 'https://tinyurl.com/yc6eb78z',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Zig Zag Shirt',
                'price' => 40000,
                'image' => 'https://tinyurl.com/33v8f3tu',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Orange Short',
                'price' => 8000,
                'image' => 'https://tinyurl.com/4458edfv',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Long Jeans',
                'price' => 70000,
                'image' => 'https://tinyurl.com/yu45p9y9',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'Green Jacket',
                'price' => 10000,
                'image' => 'https://tinyurl.com/2p828fv6',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
            [
                'name' => 'White Hoodie',
                'price' => 11000,
                'image' => 'https://tinyurl.com/3dk74rn2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'stock' => 4
            ],
        ]);
    }
}
