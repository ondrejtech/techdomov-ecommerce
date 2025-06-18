<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Přihlášení' }}</title>
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    @livewireStyles
</head>
<body class="bg-gray-100">

{{ $slot }}

@livewireScripts
</body>
</html>
