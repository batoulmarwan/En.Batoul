<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
       // admin::truncate();
        admin::create([
            'full_name'=>'Batoul',
            'email'=>'batoul@gmail.com',
            'password'=>Hash::make('1234gdQ5#'),
        ]);
        admin::create([
            'full_name'=>'Ahmad',
            'email'=>'Ahmad@gmail.com',
            'password'=>Hash::make('123kfjK42%'),
        ]);
    }
}
