<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        
        @include('menu')

        <div class="max-w-5xl mx-auto pt-20">

            <section class="grid grid-cols-3 gap-8 mt-10 text-slate-700">            
                @foreach ($posts as $post)

                    <div class="border rounded-lg shadow overflow-hidden">

                        <div class="">
                            <img src="{{ Storage::url($post->image->url) }}">
                        </div>

                        <div class="px-4 pb-4">

                            <p class="text-center font-semibold text-lg uppercase">
                                {{ $post->title }}
                            </p>

                            <h1 class="mt-3 font-semibold truncate">
                                Autor: {{ $post->user->name }}
                            </h1>

                            <p>
                                {{ Str::limit($post->content, 60) }}
                            </p>

                            <a href="{{ route('post.show', $post->id) }}" class="mt-4 w-full rounded bg-green-500 text-white py-1 inline-flex justify-center">
                                Ver más
                            </a>

                        </div>


                    </div>

                @endforeach
            </section>

        </div>

    </body>
</html>