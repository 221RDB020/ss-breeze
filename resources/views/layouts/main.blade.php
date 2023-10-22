<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sludinājumi - SS.LV</title>

    <!-- Styles / JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .scroll::-webkit-scrollbar {
            width: 10px;
        }

        .scroll::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background: #F2F7F8;
        }

        .scroll::-webkit-scrollbar-thumb:hover {
            border-radius: 5px;
            background: #E2E7E8;
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D4E36N9Q31"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-D4E36N9Q31');
    </script>
</head>
<body class="antialiased flex flex-col bg-background scroll-smooth overflow-x-hidden">
<header class="flex flex-col items-start sm:items-center my-5 mx-5 sm:mx-0">
    <a href="{{route('category.index')}}">
        <div class="flex mb-5 items-end select-none">
            <div class="flex items-center justify-center rounded-xl bg-logo border-[3px] border-black shadow-h-neubrutal w-[80px] h-[80px]">
                <span class="font-clash-sbol text-5xl text-white stroke-black stroke-[3px]" style="-webkit-text-stroke: 3px black;">SS</span>
            </div>
            <div class="w-[20px] h-[20px] bg-logo border-[3px] shadow-h-neubrutal rounded-full mx-[8px]"></div>
            <div class="h-[68px] font-clash-sbol text-6xl text-logo drop-shadow-neubrutal stroke-[3px] stroke-black" style="-webkit-text-stroke: 3px black;">lv</div>
        </div>
    </a>
    <div id="burger" class="z-20 lg:hidden absolute flex flex-col py-2 items-center justify-around right-5 sm:right-12 top-10 w-16 h-14 bg-black rounded-xl shadow-neubrutal hover:shadow-h-neubrutal ease-in duration-100 cursor-pointer">
        <div class="bg-white h-1.5 w-10"></div>
        <div class="bg-white h-1.5 w-10"></div>
        <div class="bg-white h-1.5 w-10"></div>
    </div>
    <div class="hidden lg:flex items-center justify-between w-full border-t-[3px] border-b-[3px] border-black lg:px-24 bg-white">
        <div class="flex">
            <a href="{{route('advertisement.create')}}" class="text-black underline decoration-transparent hover:decoration-black ease-in duration-100 font-clash-reg text-clamp-2xl mr-12">Iesniegt sludinājumu</a>
            <a href="" class="text-black underline decoration-transparent hover:decoration-black ease-in duration-100 font-clash-reg text-clamp-2xl mr-12">Mani sludinājumi</a>
            <a href="" class="text-black underline decoration-transparent hover:decoration-black ease-in duration-100 font-clash-reg text-clamp-2xl mr-12">Meklēšana</a>
            <a href="" class="text-black underline decoration-transparent hover:decoration-black ease-in duration-100 font-clash-reg text-clamp-2xl mr-12">Memo</a>
        </div>
        @guest
            <div class="flex">
                <a href="{{route('login')}}" class="flex bg-black items-center justify-center w-56 h-24 text-white font-clash-reg text-clamp-2xl">Login</a>
            </div>
        @endguest
        @auth
            @php
                $user = \Illuminate\Support\Facades\Auth::user();
                $username = $user?->name;
            @endphp
            <div class="flex">
                <a href="{{route('profile.edit')}}" class="flex bg-black items-center justify-center w-56 h-24 text-white font-clash-reg text-clamp-2xl">{{$username}}</a>
            </div>
        @endauth
    </div>
    <div id="menu" class="lg:hidden absolute top-0 right-0 flex h-[100dvh] w-[100vw] justify-end translate-x-full z-10 ease-in-out duration-100 backdrop-blur-sm">
        <div class="flex flex-col w-[100%] sm:w-[75%] bg-secondary border-l-[3px] border-black p-10">
            @guest
                <a href="{{route('login')}}" class="flex text-white font-clash-reg text-clamp-4xl h-14 w-[36vw] sm:w-40 bg-black rounded-xl items-center justify-center shadow-neubrutal hover:shadow-h-neubrutal ease-in duration-100">
                    Login
                </a>
            @endguest
            <a href="{{route('advertisement.create')}}" class="mt-[12dvh] text-black font-clash-reg text-clamp-4xl mb-[4dvh]">Iesniegt sludinājumu</a>
            <a href="" class="text-black font-clash-reg text-clamp-4xl mb-[4dvh]">Mani sludinājumi</a>
            <a href="" class="text-black font-clash-reg text-clamp-4xl mb-[4dvh]">Meklēšana</a>
            <a href="" class="text-black font-clash-reg text-clamp-4xl mb-[4dvh]">Memo</a>
        </div>
    </div>
</header>
@yield('content')
<footer class="h-[17dvh] bg-white flex justify-center items-center">
    <p class="text-text font-clash-reg text-clamp-2xl text-center">
        <span>Noteikumi</span> |
        <span>Saikne ar redaktoru</span> |
        <span>Reklāma</span> |
        <span>Sadarbība</span> |
        <span>Sludinājumi SS.lv SIA 2023</span>
    </p>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const burger = document.getElementById('burger');
        const menu = document.getElementById('menu');
        const body = document.querySelector('body');

        burger.addEventListener("click", function() {
            if (menu.classList.contains('translate-x-full')) {
                menu.classList.replace('translate-x-full', 'translate-x-0');
            } else {
                menu.classList.replace('translate-x-0', 'translate-x-full');
            }
            body.classList.toggle('overflow-hidden');
        });
    });
</script>
</body>
</html>
