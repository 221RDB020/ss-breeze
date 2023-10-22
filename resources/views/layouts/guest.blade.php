<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- CSS/JS -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="text-black antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-background">
            <div class="w-full sm:max-w-md mt-6 px-9 py-8 bg-white shadow-neubrutal border-[3px] overflow-hidden sm:rounded-xl">
                <div class="flex justify-center pb-10">
                    <a href="{{ route('category.index') }}">
                        <div class="flex mb-4 items-end select-none">
                            <div class="flex items-center justify-center rounded-xl bg-logo border-[3px] border-black shadow-h-neubrutal w-[80px] h-[80px]">
                                <span class="font-clash-sbol text-5xl text-white stroke-black stroke-[3px]" style="-webkit-text-stroke: 3px black;">SS</span>
                            </div>
                            <div class="w-[20px] h-[20px] bg-logo border-[3px] shadow-h-neubrutal rounded-full mx-[8px]"></div>
                            <div class="h-[68px] font-clash-sbol text-6xl text-logo drop-shadow-neubrutal stroke-[3px] stroke-black" style="-webkit-text-stroke: 3px black;">lv</div>
                        </div>
                    </a>
                </div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
