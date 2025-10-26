<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="bg-blue-400 w-full py-4 mb-3 px-5">Ini navbar ya :)</div>
    <main>
        @yield('content')
    </main>
</body>
</html>