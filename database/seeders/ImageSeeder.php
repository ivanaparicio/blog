<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageSeeder extends Seeder {
    
    public function run(): void
    {
        
        $posts = Post::all();

        foreach ($posts as $key => $post) {

            $uuid = Str::uuid();
            $url = "images/blog/$uuid.jpg";

            $image = rand(1, 12);

            Storage::copy('images/test-images/' . $image . '.jpg', $url);   

            $post->image()->create([
                'url' => $url,
            ]);
        }


    }
}
