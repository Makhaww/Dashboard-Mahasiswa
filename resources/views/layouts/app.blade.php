<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SIAKAD Mini</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">

    {{-- Header --}}
    @include('partials.navbar')

    <div class="flex">
        {{-- Sidebar --}}
        @include('partials.sidebar')

        {{-- Area konten --}}
        <main class="flex-1 p-6">
            <h1 class="text-2xl font-bold mb-6">@yield('title')</h1>
            @yield('content')
        </main>
    </div>

    {{-- Footer --}}
    <footer class="text-center text-xs text-gray-500 py-4 border-t bg-white">
        &copy; {{ date('Y') }} SIAKAD Mini
    </footer>

</body>
</html>