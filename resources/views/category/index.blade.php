@extends('layouts.main')
@section('content')
    <section class="relative flex lg:justify-between min-h-[90dvh] lg:h-[80dvh] lg:px-24 sm:px-10 px-5">
        <div class="mt-12 lg:mt-20">
            <h2 class="text-black font-clash-sbol text-clamp-6xl tracking-wide max-w-[590px] lg:max-w-[684px]">
                Lielākais Sludinājumu portāls <span class="text-accent">Baltijā</span>
            </h2>
            <p class="text-text font-clash-reg text-clamp-2xl mt-6 mb-12 leading-[175%] w-[100%] lg:w-[660px]">
                Ieplūsti tajā sludinājumu jūrā, kurā var atrast visu! Regģistrējies tagad un pievieno savu sludinājumu vai sāc pētīt, kas ir pieejams tieši Tev!
            </p>
            <a href="{{route('register')}}" class="text-black font-clash-sbol text-clamp-2xl py-4 px-11 bg-accent rounded-xl border-[3px] border-black shadow-neubrutal hover:shadow-h-neubrutal ease-in duration-100">Regģistrēties</a>
        </div>
        <div class="w-[50vw] hidden sm:block lg:w-[715px] absolute lg:relative lg:right-0 lg:bottom-0 right-10 bottom-20">
            <img src="{{asset('assets/illustration.png')}}" alt="illustration">
        </div>
    </section>
    <section class="flex flex-col bg-secondary min-h-[83dvh] border-b-[3px]">
        <div class="flex justify-center items-center w-full bg-white h-24 border-t-[3px] border-b-[3px] border-black">
            <h4 class="text-black font-clash-sbol text-clamp-4xl">Visas kategorijas</h4>
        </div>
        <div class="grid gap-12 lg:mx-24 md:grid-cols-2 lg:grid-cols-3 grid-cols-1 my-24 sm:mx-10 mx-5">
            @foreach($categories as $category)
                @if(!($category->parent))
                    <div class="flex text-xl font-medium rounded-xl text-black bg-white h-20 border-[3px] border-black shadow-neubrutal hover:shadow-h-neubrutal ease-in duration-100">
                        <a class="relative flex items-center justify-center px-2 pb-0.5 w-full font-clash-med text-clamp-2xl" href={{route('category.show', ['category' => $category->url])}}>
                            {{svg($category->icon, 'absolute left-4 w-12')}}
                            <span>
                                {{$category->name}}
                            </span>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endsection
