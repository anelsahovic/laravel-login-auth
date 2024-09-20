<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Auth</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-800 text-white">

<header class="px-4 py-6 bg-gray-950 border-b-8 border-gray-900 ">
    <nav class="flex justify-between text-white font-bold ">
       <div>
            <x-nav-link href="/">LOGO</x-nav-link>
       </div>
       <div>
            <x-nav-link href="/">Home</x-nav-link>
            @auth
                <x-nav-link href="/content">CONTENT PAGE</x-nav-link>
            @endauth
            
       </div>
       <div>
        @auth
            <form action="/logout" method="POST">
                @csrf
                <button class="px-2 text-amber-200-900 uppercase text-lg hover:text-blue-300 cursor-pointer">LOG OUT</button>
            </form>
        @endauth
        @guest
            <x-nav-link href="/login">LOG IN</x-nav-link>
            <x-nav-link href="/register">REGISTER</x-nav-link>
        @endguest
            
       </div>
    </nav>
</header>

<main>
    {{$slot}}
</main>
   
</body>
</html>