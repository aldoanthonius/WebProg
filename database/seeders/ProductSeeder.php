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
                'image' => 'https://tinyurl.com/2xp4vbdv'
            ],
            [
                'name' => 'Red T-shirt',
                'price' => 10000,
                'image' => 'https://tinyurl.com/ye8w2e7m'
            ],
            [
                'name' => 'Yellow T-shirt',
                'price' => 30000,
                'image' => 'https://tinyurl.com/54yhjnj7'
            ],
            [
                'name' => 'Hype Beast Jacket',
                'price' => 20000,
                'image' => 'https://tinyurl.com/ytft6kc8'
            ],
            [
                'name' => 'Purple Jacket',
                'price' => 10000,
                'image' => 'https://tinyurl.com/24w3yd4x'
            ],
            [
                'name' => 'Black Short',
                'price' => 10000,
                'image' => 'https://tinyurl.com/24m7rtaa'
            ],
            [
                'name' => 'Blue Short',
                'price' => 10000,
                'image' => 'https://tinyurl.com/2wxd6kcd'
            ],
            [
                'name' => 'Black Hoodie',
                'price' => 10000,
                'image' => 'https://tinyurl.com/3smmdnhp'
            ],
            [
                'name' => 'White T-shirt',
                'price' => 45000,
                'image' => 'https://tinyurl.com/334mmb6r'
            ],
            [
                'name' => 'Yellow Skirt',
                'price' => 50500,
                'image' => 'https://tinyurl.com/2rypry6v'
            ],
            [
                'name' => 'Purple Hoodie',
                'price' => 80500,
                'image' => 'https://tinyurl.com/yc6eb78z'
            ],
            [
                'name' => 'Zig Zag Shirt',
                'price' => 40000,
                'image' => 'https://tinyurl.com/33v8f3tu'
            ],
            [
                'name' => 'Orange Short',
                'price' => 8000,
                'image' => 'https://tinyurl.com/4458edfv'
            ],
            [
                'name' => 'Long Jeans',
                'price' => 70000,
                'image' => 'https://tinyurl.com/yu45p9y9'
            ],
            [
                'name' => 'Green Jacket',
                'price' => 10000,
                'image' => 'https://tinyurl.com/2p828fv6'
            ],
            [
                'name' => 'White Hoodie',
                'price' => 11000,
                'image' => 'https://tinyurl.com/3dk74rn2'
            ],
        ]);
    }
}
