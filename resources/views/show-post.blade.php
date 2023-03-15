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
        <div class="max-w-5xl mx-auto pt-20 pb-14">
            <div class="mt-8">
                <div>
                    <img class="h-96 w-full object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
                </div>

                <h1 class="uppercase font-bold text-2xl text-center mt-4"> {{ $post->title }} </h1>

                <span class="font-semibold text-lg">
                    Autor: {{ $post->user->name }}
                </span>

                <div class="mt-4">
                    <p>{{ $post->content }}</p>

                    <p class="mt-10">{{ $post->body }}</p>
                </div>

            </div>
        </div>
    </body>
</html>