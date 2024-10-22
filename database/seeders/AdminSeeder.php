<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'Chris Green',
            'email' => 'cgreen@hacksolutionsusa.com',
            'password' => Hash::make('@cgreen2065'),
        ]);

        Admin::create([
            'name' => 'Reagan Mukabana',
            'email' => 'reaganmukabana@gmail.com',
            'password' => Hash::make('@Reagan2065'),
        ]);
    }
}
