<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Avis</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <x-admin-sidebar>
        <x-admin-navbar />
    </x-admin-sidebar>
</body>

</html>