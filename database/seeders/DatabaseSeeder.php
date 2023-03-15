<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {

        Storage::deleteDirectory('images/blog');

        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(ImageSeeder::class);
        
    }
}
