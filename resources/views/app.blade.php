<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head x-data="{ title: @js($title ?? 'Hey there! Introduction') }">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title
            x-text="title !== '' ? title  + ' - ' + @js(config('app.name')) : @js(config('app.name'))"
            x-on:update-title.window="title = $event.detail.title"
        ></title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;700&display=swap" rel="stylesheet">

        @livewireStyles
        @vite('resources/js/app.js')
    </head>
    <body
        x-data
        x-cloak
    >
        {{ $slot }}

        @livewireScriptConfig
    </body>
</html>
