<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head x-data="{ title: @js($title ?? 'Hey there! Introduction') }">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title
            x-text="title !== '' ? title  + ' - ' + @js(config('app.name')) : @js(config('app.name'))"
            x-on:update-title.window="title = $event.detail.title"
        ></title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

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
