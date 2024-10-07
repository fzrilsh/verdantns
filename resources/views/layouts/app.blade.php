<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/png" href="{{ asset('public/images/logo.png') }}">
    <meta name="generator" content="verdantns">
    <title>{{ $title ?? 'VerdantNS' }}</title>
    <meta name="description" content="VerdantNS">
    <meta property="og:title" content="{{ $title ?? 'VerdantNS' }}">
    <meta property="og:description" content="VerdantNS">
    <meta property="og:image" content="{{ asset('public/images/logo.png') }}">

    <tallstackui:script />
    @livewireStyles

    @if (env('APP_ENV') === 'local')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @elseif(env('APP_ENV' === 'production'))
        <link rel="stylesheet" href="{{ compiled_assets('resources/css/app.css') }}">
        <script src="{{ compiled_assets('resources/js/app.js') }}"></script>  
    @endif
</head>

<body>
    <header>
        {{-- navbar component --}}
    </header>

    {{ $slot }}

    <footer></footer>
    @livewireScripts
    @stack('scripts')
</body>

</html>
