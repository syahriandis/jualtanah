<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My App</title>
    <link href="{{ asset('style/flowbite.min.css') }}" rel="stylesheet" />
    
</head>
<body>


    @include('components.menu')

    <main class="p-4">
        @yield('content')
    </main>

    <script src="{{ asset('style/flowbite.min.js') }}"></script>
</body>
</html>
