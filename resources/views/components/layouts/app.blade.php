<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Přihlášení' }}</title>

    {{-- Načtení stylů --}}
    <link rel="stylesheet" href="{{ asset('assets/bundles/css/patternfly.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/css/login.css') }}">

    @livewireStyles
</head>
<body class="login-pf body">

{{ $slot }}

@livewireScripts
</body>
</html>
