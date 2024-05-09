<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'abdelrhman',
            'email'=>'abdelrhman@gmail.com',
            'password'=>Hash::make('07775000')
      ]);
        User::create([
            'name'=>'Ahmed',
            'email'=>'Ahmed@gmail.com',
            'password'=>Hash::make('07775000')
        ]);
    }
}
