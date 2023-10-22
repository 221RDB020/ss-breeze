<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sludinājumi - SS.LV</title>

    <!-- Styles / JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .bullet {
            width: 0.5rem;
            height: 0.5rem;
            background-color: #00A8E8;
            transition: ease 200ms;
        }
        .active-bullet {
            width: 1rem;
            height: 1rem;
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
<body class="antialiased flex items-center justify-center bg-background overflow-x-hidden min-h-[100dvh]">
    <a href="{{ route('category.index') }}" class="absolute left-10 top-10 flex items-center justify-center rounded-full bg-white text-black w-[10vmin] h-[10vmin] p-[3.4vmin] hover:shadow-smooth ease-in duration-200">
        <svg class="w-full h-full" viewBox="0 0 34 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M32 13.5C32.8284 13.5 33.5 12.8284 33.5 12C33.5 11.1716 32.8284 10.5 32 10.5L32 13.5ZM0.939338 10.9393C0.353552 11.5251 0.353551 12.4749 0.939338 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97918 12.6066 1.3934C12.0208 0.80761 11.0711 0.807609 10.4853 1.3934L0.939338 10.9393ZM32 10.5L2 10.5L2 13.5L32 13.5L32 10.5Z" fill="black"/>
        </svg>
    </a>
    <div class="absolute right-[4vmin] top-0 bottom-0 justify-center flex flex-col gap-8 text-clamp-3xl font-clash-lig">
        <div class="flex items-center bg-white rounded-full border-[1px] border-lightgray">
            <div class="w-[8vmin] h-[8vmin] bg-white flex items-center justify-center rounded-full border-[1px] border-lightgray">
                <span>1</span>
            </div>
            <div class="text-clamp-xl px-5">Kategorija</div>
        </div>
        <div class="flex relative items-center bg-background rounded-full border-[1px] border-lightgray">
            <div class="w-[8vmin] h-[8vmin] bg-background flex items-center justify-center rounded-full border-[1px] border-lightgray">
                <span>2</span>
            </div>
            <div class="text-clamp-xl px-5">Apraksts</div>
        </div>
        <div class="flex items-center bg-background rounded-full border-[1px] border-lightgray">
            <div class="w-[8vmin] h-[8vmin] bg-background flex items-center justify-center rounded-full border-[1px] border-lightgray">
                <span>3</span>
            </div>
            <div class="text-clamp-xl px-5">Attēli</div>
        </div>
        <div class="flex items-center bg-background rounded-full border-[1px] border-lightgray">
            <div class="w-[8vmin] h-[8vmin] bg-background flex items-center justify-center rounded-full border-[1px] border-lightgray">
                <span>4</span>
            </div>
            <div class="text-clamp-xl px-5">Apmaksa</div>
        </div>
    </div>
    <div class="flex w-full flex-col items-center">
        <h1 class="text-black font-clash-lig text-clamp-5xl text-center w-full">Izvēlieties kategoriju</h1>
        <div class="flex flex-col mt-8 p-4 rounded-2xl bg-white w-full sm:w-[600px] lg:w-[800px] h-[60vh]">
            <div id="accordion-outer-container" class="flex overflow-hidden">
                <div id="accordion-inner-container" class="relative scroll-smooth flex flex-col w-full overflow-hidden snap-proximity rounded-lg pb-4">
                    @foreach( $mainCategories as $mainCategory )
                        <div role="rowgroup" class="accordion-main-category flex cursor-pointer items-center px-6 py-4 border-b-[1px] border-lightgray snap-start">
                            @if( count($mainCategory->children) )
                                <svg width="26" height="14" viewBox="0 0 26 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L13 13" stroke="black" stroke-linecap="round"/>
                                    <path d="M13 13L25 1" stroke="black" stroke-linecap="round"/>
                                </svg>
                            @endif
                            <span class="pl-12 text-clamp-xl font-clash-lig text-black">
                                {{ $mainCategory->name }}
                            </span>
                        </div>
                        @if( count($mainCategory->children) )
                            @include( 'components.subcategories-list',['subcategories' => $mainCategory->children] )
                        @endif
                    @endforeach
                </div>
                <div id="scroll-bar" role="scrollbar" class="flex flex-col items-center justify-center ml-2.5 w-4 h-full gap-2"></div>
            </div>
            <div class="flex justify-end px-6">
                <button disabled class="bg-black disabled:bg-lightgray cursor-pointer disabled:cursor-default px-8 py-2 font-clash-lig text-clamp-xl text-white rounded-xl">Turpināt</button>
            </div>
        </div>
    </div>
</body>
</html>
