<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::query()->insert([
            [
                "id"=> 1,
                "username"=> "asalasal",
                "email"=> "asalasal@gmail.com",
                "password"=> bcrypt("asalasal"),
                "phone"=> "089675627226",
                "address"=> "jalan asal",
                "role"=> "member",
            ],
            [
                "id"=> 2,
                "username"=> "Aldo Anthonius",
                "email"=> "aldoadmin@gmail.com",
                "password"=> bcrypt("aldoadmin"),
                "phone"=> "089675627226",
                "address"=> "jalan admin",
                "role"=> "admin",
            ]

            ]);
    }
}
