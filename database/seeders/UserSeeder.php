<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //used to create data that you want in the database not fake data like factories
        User::create(
            [
            'name'=>'Allan',
            'email'=>'rutoallan2017@gmail.com',
            'password'=>'rutoallan2017@gmail.com'
            
            
            ]
            );
    }
}
