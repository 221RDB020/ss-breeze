@extends('layouts.main')
@section('content')
    <section class="flex flex-col min-h-[80dvh] lg:px-24 sm:px-10 px-5 border-b-[3px]">
        <x-router :subcategory2="$_subcategory2" :subcategory="$_subcategory" :category="$_category"/>
        <div class="flex flex-col-reverse lg:flex-row mt-12 mx-6 justify-between">
            <div
                class="flex relative justify-between w-full max-w-[400px] min-h-[60vh] border-[3px] shadow-neubrutal rounded-xl flex-col flex-grow bg-white">
                <div class="flex relative justify-between items-center h-20 px-9 pt-5">
                    <div>
                        <h4 class="text-black leading-6 text-clamp-3xl font-clash-med">{{$advertisement->brand}}</h4>
                        <p class="text-text leading-5 text-clamp-2xl font-clash-med normal-case">{{$advertisement->model}}</p>
                    </div>
                    {{ svg('si-audi', 'w-1/3 absolute right-9') }}
                </div>
                <div class="pl-9">
                    <p class="text-text leading-6 text-clamp-xl font-clash-reg">Gads:</p>
                    <p class="text-black text-clamp-2xl font-clash-reg">{{$advertisement->car_manufacturing_year}}</p>
                    <p class="text-text leading-6 text-clamp-xl font-clash-reg">Motors:</p>
                    <p class="text-black text-clamp-2xl font-clash-reg">
                        {{$advertisement->engine_capacity}}
                        @if($advertisement->engine_type == 1)
                            Benzīns
                        @elseif($advertisement->engine_type == 2)
                            Benzīns/Gāze
                        @elseif($advertisement->engine_type == 3)
                            Dīzelis
                        @elseif($advertisement->engine_type == 4)
                            Hybrid
                        @elseif($advertisement->engine_type == 5)
                            Elektriskais
                        @endif
                    </p>
                    <p class="text-text leading-6 text-clamp-xl font-clash-reg">Ātr.kārba:</p>
                    <p class="text-black text-clamp-2xl font-clash-reg">
                        @if($advertisement->car_gearbox == 1)
                            Manuāla
                        @elseif($advertisement->car_gearbox == 2)
                            Automāts
                        @endif
                        {{$advertisement->gear_count}}
                        ātrumi
                    </p>
                    <p class="text-text leading-6 text-clamp-xl font-clash-reg">Nobraukums, km:</p>
                    <p class="text-black text-clamp-2xl font-clash-reg">{{number_format((float) $advertisement->car_mileage, 0, '.', ' ')}}</p>
                    <p class="text-text leading-6 text-clamp-xl font-clash-reg">Krāsa:</p>
                    <p class="text-black text-clamp-2xl font-clash-reg flex items-center">
                        @if($advertisement->colour == '#ffffff')
                            Balta
                        @endif
                        @if($advertisement->colour == '#967E76')
                            Brūna
                        @endif
                        @if($advertisement->colour == '#FFD966')
                            Dzeltena
                        @endif
                        @if($advertisement->colour == '#B4E4FF')
                            Gaiši zila
                        @endif
                        @if($advertisement->colour == '#000000')
                            Melna
                        @endif
                        @if($advertisement->colour == '#FAAB78')
                            Oranža
                        @endif
                        @if($advertisement->colour == '#B7B7B7')
                            Pelēka
                        @endif
                        @if($advertisement->colour == '#EF4B4B')
                            Sarkana
                        @endif
                        @if($advertisement->colour == '#F9F9F9')
                            Sudraba
                        @endif
                        @if($advertisement->colour == '#BD574E')
                            Tumši sarkana
                        @endif
                        @if($advertisement->colour == '#B689B0')
                            Violeta
                        @endif
                        @if($advertisement->colour == '#B0E0A8')
                            Zaļa
                        @endif
                        @if($advertisement->colour == '#6096B4')
                            Zila
                        @endif
                        @if($advertisement->colour == 'cita')
                            Cita
                        @endif
                        <span class="flex ml-3 w-[2.5rem] h-[1.5rem] rounded-lg"
                              style="background-color: {{$advertisement->colour}}"></span>
                    </p>
                    <p class="text-text leading-6 text-clamp-xl font-clash-reg">Virsbūves tips:</p>
                    <p class="text-black text-clamp-2xl font-clash-reg">
                        @if($advertisement->car_body_type == 1)
                            Apvidus
                        @elseif($advertisement->car_body_type == 2)
                            Hečbeks
                        @elseif($advertisement->car_body_type == 3)
                            Sedans
                        @elseif($advertisement->car_body_type == 4)
                            Universāls
                        @elseif($advertisement->car_body_type == 5)
                            Kabriolets
                        @elseif($advertisement->car_body_type == 6)
                            Kupeja
                        @elseif($advertisement->car_body_type == 7)
                            Mikroautobuss
                        @elseif($advertisement->car_body_type == 8)
                            Minivens
                        @elseif($advertisement->car_body_type == 9)
                            Pikaps
                        @endif
                    </p>
                    <p class="text-text leading-6 text-clamp-xl font-clash-reg">Tehniskā apskate:</p>
                    <p class="text-black text-clamp-2xl font-clash-reg">{{str_replace('-','.',$advertisement->technical_inspection)}}</p>
                </div>
                <div class="flex items-center justify-center h-12 w-full bg-black">
                    {{ svg('eos-euro', 'text-white w-6 mr-1') }}
                    <span
                        class="text-white text-clamp-2xl font-clash-med">{{number_format((float) $advertisement->price, 0, '.', ' ')}}</span>
                </div>
            </div>
            <div
                class="flex relative w-full ml-[5vw] min-h-[60vh] bg-white shadow-neubrutal-white rounded-lg border-[3px]">
                <div
                    class="absolute -top-1 -left-1 right-[-3px] bottom-[-3px] bg-black shadow-neubrutal rounded-xl border-[3px]"
                    style="clip-path: polygon(0% 0%, 110% 0, 110% 70%, 70% 110%, 0% 110%);">
                    <div class="flex w-full h-full bg-white rounded-lg"
                         style="clip-path: polygon(0% 0%, 100% 0, 100% 79%, 79% 100%, 0% 100%);">
                        <div
                            class="flex items-center w-3/4 mx-9 my-6 h-[calc(60vh-48px)] max-h-[542px] border-[3px] rounded-xl overflow-clip">
                            <img class="w-full h-fit" src="{{asset('assets/car_demo.jpeg')}}" alt="ad-image">
                        </div>
                        <div class="flex flex-col w-1/5 h-3/4 justify-between pt-6 pr-9">
                            <div class="flex h-[122px] items-center border-[3px] rounded-xl overflow-clip">
                                <img class="w-full h-fit" src="{{asset('assets/car_demo.jpeg')}}" alt="ad-image">
                            </div>
                            <div class="flex h-[122px] items-center border-[3px] rounded-xl overflow-clip">
                                <img class="w-full h-fit" src="{{asset('assets/car_demo.jpeg')}}" alt="ad-image">
                            </div>
                            <div class="flex justify-center items-center h-[122px] border-[3px] rounded-xl">
                                <div class="flex w-14 justify-between">
                                    <div class="w-4 h-4 rounded-full border-[3px]"></div>
                                    <div class="w-4 h-4 rounded-full border-[3px]"></div>
                                    <div class="w-4 h-4 rounded-full border-[3px]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ svg('go-screen-full-24', 'absolute right-2 bottom-2 w-14') }}
            </div>
        </div>
        <div class="flex flex-col bg-white mx-6 my-24 pb-16 rounded-xl border-[3px] shadow-neubrutal">
            <div class="text-clamp-2xl font-clash-med" role="tablist" aria-labelledby="channel-name">
                <button
                    id="tab-1"
                    role="tab"
                    aria-controls="tabPanel-1"
                    aria-selected="true"
                    tabindex="0"
                    class="tracking-wide">
                    Apraksts
                </button>
                <button
                    id="tab-2"
                    role="tab"
                    aria-controls="tabPanel-2"
                    aria-selected="false"
                    tabindex="-1"
                    class="tracking-wide">
                    Aprīkojums
                </button>
                <button
                    id="tab-3"
                    role="tab"
                    aria-controls="tabPanel-3"
                    aria-selected="false"
                    tabindex="-1"
                    class="tracking-wide">
                    Dati
                </button>
                <button
                    id="tab-4"
                    role="tab"
                    aria-controls="tabPanel-4"
                    aria-selected="false"
                    tabindex="-1"
                    class="tracking-wide">
                    Kontakti
                </button>
            </div>
            <div class="tab-panels flex mx-9">
                <div class="pl-10" id="tabPanel-1" role="tabpanel" tabindex="0" aria-labelledby="tab-1">
                    <p class="max-w-[75ch] font-clash-reg text-clamp-xl tracking-wider text-black">
                        {{$advertisement->ad_text}}
                    </p>
                </div>
                <div class="grid hidden" id="tabPanel-2" role="tabpanel" tabindex="0" aria-labelledby="tab-2">
                    <div class="row-span-2 col-span-2 rounded-xl border-[3px] bg-white px-9 py-4">
                        <h4 class="font-clash-med text-clamp-xl">Aprīkojums</h4>
                        <div class="grid grid-cols-2 grid-rows-2 py-4 w-full h-full text-text font-clash-reg text-sm">
                            @php
                                $options = json_decode($advertisement->vehicle_options);
                            @endphp
                            <div>
                                <p class="{{$options[0] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Stūres hidropastiprinātājs</p>
                                <p class="{{$options[1] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Elektr. stūres pastiprinātājs</p>
                                <p class="{{$options[2] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Kondicionieris</p>
                                <p class="{{$options[3] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Klimata kontrole</p>
                                <p class="{{$options[4] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Autonomais sildītājs</p>
                                <p class="{{$options[5] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Salona gaisa
                                    filtrs</p>
                                <p class="{{$options[6] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Borta dators</p>
                                <p class="{{$options[7] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Riepu spiediena
                                    kontrole</p>
                                <p class="{{$options[8] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Parkošanās sens. priekšā</p>
                                <p class="{{$options[9] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Atpakaļskata
                                    kamera</p>
                            </div>
                            <div>
                                <p class="{{$options[10] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Atpakaļskata kamera</p>
                                <p class="{{$options[11] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Nakts redzamības kamera</p>
                                <p class="{{$options[12] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Panorāmas redzam. kameras</p>
                                <p class="{{$options[13] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Distances kontrole</p>
                                <p class="{{$options[14] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Lietus
                                    sensors</p>
                                <p class="{{$options[15] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Kruīza
                                    kontrole</p>
                                <p class="{{$options[16] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Adaptīvā kruīzkontrole</p>
                                <p class="{{$options[17] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Gājēju detektors</p>
                                <p class="{{$options[18] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Automātiskā parkošanās</p>
                                <p class="{{$options[19] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Ceļa zīmju atpazīš. sistēma</p>
                            </div>
                            <div>
                                <p class="{{$options[20] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Klusuma zonu asistents</p>
                                <p class="{{$options[21] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Palīgsistēma braukš. joslās</p>
                                <p class="{{$options[22] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Avārijas
                                    bremzēšanas sist.</p>
                                <p class="{{$options[23] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Keyless Go</p>
                                <p class="{{$options[24] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Sistēma Start-Stop</p>
                                <p class="{{$options[25] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    El. bagāžnieka aizvēršana</p>
                                <p class="{{$options[26] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    El. aizmugures saulessargs</p>
                                <p class="{{$options[27] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    El. durvju aizvēršana</p>
                                <p class="{{$options[28] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Jumta reliņi</p>
                                <p class="{{$options[29] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Sakabes āķis</p>
                            </div>
                            <div>
                                <p class="{{$options[30] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Lūka</p>
                                <p class="{{$options[31] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Panorāmas lūka</p>
                                <p class="{{$options[32] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Pilnpiedziņa
                                    4x4</p>
                                <p class="{{$options[33] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Pneimopiekare</p>
                                <p class="{{$options[34] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Spoileris</p>
                                <p class="{{$options[35] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Sliekšņi</p>
                                <p class="{{$options[36] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Sporta pakete</p>
                                <p class="{{$options[37] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Servisa grāmatiņa</p>
                                <p class="{{$options[38] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Vieglmetāla
                                    diski</p>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-1 col-span-1 rounded-xl border-[3px] bg-white px-9 py-4">
                        <h4 class="font-clash-med text-clamp-xl">Salons</h4>
                        <div class="grid grid-cols-1 grid-rows-1 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p class="{{$options[39] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Ādas apdare</p>
                                <p class="{{$options[40] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Roku balsti</p>
                                <p class="{{$options[41] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Tonēti
                                    aizmugurējie logi</p>
                                <p class="{{$options[42] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Saulessargi
                                    logiem</p>
                                <p class="{{$options[43] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Isofix
                                    stiprinājumi</p>
                                <p class="{{$options[44] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Ledusskapis</p>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-1 col-span-1 rounded-xl border-[3px] bg-white px-9 py-4">
                        <h4 class="font-clash-med text-clamp-xl">Stūre</h4>
                        <div class="grid grid-cols-1 grid-rows-1 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p class="{{$options[45] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Regulējama</p>
                                <p class="{{$options[46] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    El. regulējama</p>
                                <p class="{{$options[47] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Daudzfunkcionāla</p>
                                <p class="{{$options[48] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Sporta</p>
                                <p class="{{$options[49] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Apsildāma</p>
                                <p class="{{$options[50] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Ar. atmiņu</p>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-1 col-span-1 rounded-xl border-[3px] bg-white px-9 py-4">
                        <h4 class="font-clash-med text-clamp-xl">Sēdekļi</h4>
                        <div class="grid grid-cols-1 grid-rows-1 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p class="text-black pl-2 font-clash-med border-l-[4px] border-accent">El.
                                    regulējami</p>
                                <p class="{{$options[51] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Apsildāmi</p>
                                <p class="{{$options[52] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Sporta</p>
                                <p class="{{$options[53] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Recaro</p>
                                <p class="{{$options[54] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Ventilējami</p>
                                <p class="{{$options[55] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Masāžas</p>
                                <p class="{{$options[56] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Ar atmiņu</p>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-2 col-span-1 rounded-xl border-[3px] bg-white px-9 py-4">
                        <h4 class="font-clash-med text-clamp-xl">Hi-Fi</h4>
                        <div class="grid grid-cols-1 grid-rows-2 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p class="{{$options[57] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    FM/AM</p>
                                <p class="{{$options[58] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    CD</p>
                                <p class="{{$options[59] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    CD mainītājs</p>
                                <p class="{{$options[60] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    DVD</p>
                                <p class="{{$options[61] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    DVD mainītājs</p>
                                <p class="{{$options[62] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    MP3</p>
                                <p class="{{$options[63] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    USB</p>
                                <p class="{{$options[64] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    SDcard</p>
                            </div>
                            <div>
                                <p class="{{$options[65] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    HDD</p>
                                <p class="{{$options[66] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    TV</p>
                                <p class="{{$options[67] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    LCD</p>
                                <p class="{{$options[68] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Navigācija</p>
                                <p class="{{$options[69] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Tel./mob.</p>
                                <p class="{{$options[70] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Bluetooth</p>
                                <p class="{{$options[71] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Hands-free</p>
                                <p class="{{$options[72] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Subwoofer</p>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-1 col-span-1 rounded-xl border-[3px] bg-white px-9 py-4">
                        <h4 class="font-clash-med text-clamp-xl">Gaismas</h4>
                        <div class="grid grid-cols-1 grid-rows-1 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p class="{{$options[73] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Xenona</p>
                                <p class="{{$options[74] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Bi xenona</p>
                                <p class="{{$options[75] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    LED</p>
                                <p class="{{$options[76] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    LED
                                    bremžugunis</p>
                                <p class="{{$options[77] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Papild. bremžu signāls</p>
                                <p class="{{$options[78] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Miglas lukturi</p>
                                <p class="{{$options[79] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Lampu mazgātāji</p>
                                <p class="{{$options[80] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Automāt. tuvās gaismas</p>
                                <p class="{{$options[81] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Automāt. tālās gaismas</p>
                                <p class="{{$options[82] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Adaptīvās tālās gaismas</p>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-1 col-span-1 rounded-xl border-[3px] bg-white px-9 py-4">
                        <h4 class="font-clash-med text-clamp-xl">Spoguļi</h4>
                        <div class="grid grid-cols-1 grid-rows-1 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p class="{{$options[83] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    El.
                                    regulējami</p>
                                <p class="{{$options[84] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Apsildāmi</p>
                                <p class="{{$options[85] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Aptumšojošie</p>
                                <p class="{{$options[86] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Sporta</p>
                                <p class="{{$options[87] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    El. nolokāmi</p>
                                <p class="{{$options[88] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Ar atmiņu</p>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-1 col-span-1 rounded-xl border-[3px] bg-white px-9 py-4">
                        <h4 class="font-clash-med text-clamp-xl">Drošība</h4>
                        <div class="grid grid-cols-1 grid-rows-1 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p class="{{$options[89] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    ABS</p>
                                <p class="{{$options[90] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Centrālā atslēga</p>
                                <p class="{{$options[91] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Signalizācija</p>
                                <p class="{{$options[92] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Imobilaizers</p>
                                <p class="{{$options[93] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Air-bag</p>
                                <p class="{{$options[94] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    ESP</p>
                                <p class="{{$options[95] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    ASR</p>
                                <p class="{{$options[96] == 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}}">
                                    Marķējums</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pl-10 hidden" id="tabPanel-3" role="tabpanel" tabindex="0" aria-labelledby="tab-3">
                    <h4 class="font-clash-reg text-clamp-xl text-text">VIN kods:</h4>
                    <p class="select-all uppercase font-clash-med text-clamp-xl tracking-wider text-black">{{$advertisement->vin}}</p>
                    <h4 class="font-clash-reg text-clamp-xl text-text mt-6">Valst numura zīme:</h4>
                    <p class="select-all uppercase font-clash-med text-clamp-xl tracking-wider text-black">{{$advertisement->number_plate}}</p>
                    <h4 class="font-clash-reg text-clamp-xl text-text mt-6">OCTA LV:</h4>
                    <a href="https://www.octa.lv/lat/"
                       class="underline font-clash-med text-clamp-xl tracking-wider text-accent">Aprēķināt
                        apdrošināšanu</a>
                </div>
                <div class="pl-10 hidden" id="tabPanel-4" role="tabpanel" tabindex="0" aria-labelledby="tab-4">
                    <div class="flex items-center mb-6">
                        {{ svg('eos-phone', 'w-8 mr-6') }}
                        <p class="font-clash-med text-clamp-xl tracking-wider text-black">
                            (+371) {{number_format($advertisement->phone, 0, '', ' ')}}</p>
                    </div>
                    <div class="flex items-center mb-6">
                        {{ svg('eos-email', 'w-8 mr-6') }}
                        <button id="show-email-form"
                                class="font-clash-med text-clamp-xl tracking-wider text-black hover:underline">Nosūtīt
                            e-pastu
                        </button>
                    </div>
                    <div id="email-form" hidden>
                        <form class="flex flex-col ml-14 mb-6" action="">
                            @csrf
                            <div class="flex justify-around gap-6 mb-6">
                                <div class="flex flex-col">
                                    <label class="font-clash-reg text-sm text-text" for="email">Tavs e-pasts:</label>
                                    <input class="border-2 rounded-xl font-clash-reg px-3 py-1" type="email"
                                           name="email" id="email" placeholder="example@mail.com">
                                </div>
                                <div class="flex flex-col">
                                    <label class="font-clash-reg text-sm text-text" for="name">Tavs vārds:</label>
                                    <input class="border-2 rounded-xl font-clash-reg px-3 py-1" type="text" name="name"
                                           id="name" placeholder="John Wick">
                                </div>
                                <div class="flex flex-col">
                                    <label class="font-clash-reg text-sm text-text" for="phone">Tavs telefona
                                        numurs:</label>
                                    <input class="border-2 rounded-xl font-clash-reg px-3 py-1" type="text" name="phone"
                                           id="phone" placeholder="+371 20 202 020">
                                </div>
                            </div>
                            <textarea class="border-2 mb-6 rounded-xl font-clash-reg px-3 py-1" name="text" id="text"
                                      cols="30" rows="10"></textarea>
                            <input
                                class="border-2 rounded-xl font-clash-med px-3 py-1 hover:bg-background cursor-pointer"
                                type="submit" value="Sūtīt ziņojumu">
                        </form>
                    </div>
                    <div class="flex items-center">
                        {{ svg('eos-location-on', 'w-8 mr-6') }}
                        <p class="font-clash-med text-clamp-xl tracking-wider text-black">{{$advertisement->location}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end px-6 mb-12 font-clash-reg text-clamp-xl text-text tracking-wider">
            <p>Unikālo apmeklētāju skaits: <span>{{$advertisement->views}}</span></p>
            <p class="ml-6">Datums: <span>{{date_format($advertisement->created_at, 'd.m.Y H:i')}}</span></p>
        </div>
        <div class="flex flex-col mb-24 mx-6">
            <h4 class="font-clash-reg text-clamp-3xl ml-9">Līdzīgi sludinājumi:</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4">
                <a href="#">
                    <div class="flex flex-col rounded-xl border-[3px]">
                        <div class="flex justify-between px-2">
                            <h4 class="font-clash-med text-clamp-xl">Audi S4</h4>
                            <div class="flex">
                                {{ svg('eos-euro', 'w-5') }}
                                <h4 class="font-clash-med text-clamp-xl">14 200</h4>
                            </div>
                        </div>
                        <div class="flex w-full max-h-[265px] overflow-clip">
                            <img class="w-full h-fit" src="{{asset('assets/car_demo.jpeg')}}" alt="ad-image">
                        </div>
                        <div class="flex justify-center">
                            <p class="text-sm leading-7 text-text font-clash-reg">
                                3.0 benzīns | Automāts | Sedans | 2009
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="flex flex-col rounded-xl border-[3px]">
                        <div class="flex justify-between px-2">
                            <h4 class="font-clash-med text-clamp-xl">Audi S4</h4>
                            <div class="flex">
                                {{ svg('eos-euro', 'w-5') }}
                                <h4 class="font-clash-med text-clamp-xl">14 200</h4>
                            </div>
                        </div>
                        <div class="flex w-full max-h-[265px] overflow-clip">
                            <img class="w-full h-fit" src="{{asset('assets/car_demo.jpeg')}}" alt="ad-image">
                        </div>
                        <div class="flex justify-center">
                            <p class="text-sm leading-7 text-text font-clash-reg">
                                3.0 benzīns | Automāts | Sedans | 2009
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="flex flex-col rounded-xl border-[3px]">
                        <div class="flex justify-between px-2">
                            <h4 class="font-clash-med text-clamp-xl">Audi S4</h4>
                            <div class="flex">
                                {{ svg('eos-euro', 'w-5') }}
                                <h4 class="font-clash-med text-clamp-xl">14 200</h4>
                            </div>
                        </div>
                        <div class="flex w-full max-h-[265px] overflow-clip">
                            <img class="w-full h-fit" src="{{asset('assets/car_demo.jpeg')}}" alt="ad-image">
                        </div>
                        <div class="flex justify-center">
                            <p class="text-sm leading-7 text-text font-clash-reg">
                                3.0 benzīns | Automāts | Sedans | 2009
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="flex flex-col rounded-xl border-[3px]">
                        <div class="flex justify-between px-2">
                            <h4 class="font-clash-med text-clamp-xl">Audi S4</h4>
                            <div class="flex">
                                {{ svg('eos-euro', 'w-5') }}
                                <h4 class="font-clash-med text-clamp-xl">14 200</h4>
                            </div>
                        </div>
                        <div class="flex w-full max-h-[265px] overflow-clip">
                            <img class="w-full h-fit" src="{{asset('assets/car_demo.jpeg')}}" alt="ad-image">
                        </div>
                        <div class="flex justify-center">
                            <p class="text-sm leading-7 text-text font-clash-reg">
                                3.0 benzīns | Automāts | Sedans | 2009
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
