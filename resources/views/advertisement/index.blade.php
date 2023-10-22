@extends('layouts.main')
@section('content')
    <section class="flex flex-col min-h-[90dvh] border-b-[3px] lg:min-h-[80dvh] lg:px-24 sm:px-10 px-0">
        <x-router :subcategory2="$_subcategory2 ?? null" :subcategory="$_subcategory ?? null" :category="$_category"/>
        <div
            class="grid gap-4 h-full max-w-full mt-3 md:mt-9 mb-4 md:mb-16 px-0 md:px-10 py-0 md:py-5 bg-white md:rounded-xl md:border-[3px] md:shadow-neubrutal">
            <form class="flex items-center" method="GET">
                <div class="flex flex-wrap">
                    <div class="mx-3 my-1">
                        <p class="ml-2 text-text text-md font-clash-reg">Cena:</p>
                        <div class="flex items-center font-clash-reg text-lg">
                            <input placeholder="no" type="text" name="price_min"
                                   value="{{isset($_GET['price_min']) ? $_GET['price_min']:""}}"
                                   class="px-2 py-0.5 border-2 border-black focus:shadow-h-neubrutal outline-0 rounded-xl w-[100px] ease-in duration-75">
                            <span class="px-0.5 font-clash-med text-2xl">-</span>
                            <input placeholder="līdz" type="text" name="price_max"
                                   value="{{isset($_GET['price_max']) ? $_GET['price_max']:""}}"
                                   class="px-2 py-0.5 border-2 border-black focus:shadow-h-neubrutal outline-0 rounded-xl w-[100px] ease-in duration-75">
                        </div>
                    </div>
                    <div class="mx-3 my-1">
                        <p class="ml-2 text-text text-md font-clash-reg">Gads:</p>
                        <div class="flex items-center font-clash-reg text-lg">
                            <input placeholder="no" type="text" name="year_min"
                                   value="{{isset($_GET['year_min']) ? $_GET['year_min']:""}}"
                                   class="px-2 py-0.5 border-2 border-black focus:shadow-h-neubrutal outline-0 rounded-xl w-[100px] ease-in duration-75">
                            <span class="px-0.5 font-clash-med text-2xl">-</span>
                            <input placeholder="līdz" type="text" name="year_max"
                                   value="{{isset($_GET['year_max']) ? $_GET['year_max']:""}}"
                                   class="px-2 py-0.5 border-2 border-black focus:shadow-h-neubrutal outline-0 rounded-xl w-[100px] ease-in duration-75">
                        </div>
                    </div>
                    <div class="mx-3 my-1">
                        <p class="ml-2 text-text text-md font-clash-reg">Tilpums:</p>
                        <div class="flex items-center font-clash-reg text-lg">
                            <input placeholder="no" type="text" name="engine_capacity_min"
                                   value="{{isset($_GET['engine_capacity_min']) ? $_GET['engine_capacity_min']:""}}"
                                   class="px-2 py-0.5 border-2 border-black focus:shadow-h-neubrutal outline-0 rounded-xl w-[100px] ease-in duration-75">
                            <span class="px-0.5 font-clash-med text-2xl">-</span>
                            <input placeholder="līdz" type="text" name="engine_capacity_max"
                                   value="{{isset($_GET['engine_capacity_max']) ? $_GET['engine_capacity_max']:""}}"
                                   class="px-2 py-0.5 border-2 border-black focus:shadow-h-neubrutal outline-0 rounded-xl w-[100px] ease-in duration-75">
                        </div>
                    </div>
                    <div class="mx-3 my-1">
                        <p class="ml-2 text-text text-md font-clash-reg">Dzinējs:</p>
                        <select name="engine_type"
                                class="flex items-center font-clash-reg text-lg px-2 w-fit h-[35px] border-2 border-black cursor-pointer focus:shadow-h-neubrutal outline-0 rounded-xl ease-in duration-75">
                            <option {{isset($_GET['engine_type']) ? $_GET['engine_type'] == "0" || $_GET['engine_type'] == "" ? "selected":"" : ""}}></option>
                            <option
                                value="1" {{isset($_GET['engine_type']) ? $_GET['engine_type'] == "1" ? "selected":"" : ""}}>
                                Benzīns
                            </option>
                            <option
                                value="2" {{isset($_GET['engine_type']) ? $_GET['engine_type'] == "2" ? "selected":"" : ""}}>
                                Benzīns/Gāze
                            </option>
                            <option
                                value="3" {{isset($_GET['engine_type']) ? $_GET['engine_type'] == "3" ? "selected":"" : ""}}>
                                Dīzelis
                            </option>
                            <option
                                value="4" {{isset($_GET['engine_type']) ? $_GET['engine_type'] == "4" ? "selected":"" : ""}}>
                                Hybrid
                            </option>
                            <option
                                value="5" {{isset($_GET['engine_type']) ? $_GET['engine_type'] == "5" ? "selected":"" : ""}}>
                                Elektriskais
                            </option>
                        </select>
                    </div>
                    <div class="mx-3 my-1">
                        <p class="ml-2 text-text text-md font-clash-reg">Ātr. kārba:</p>
                        <select name="car_gearbox"
                                class="flex items-center font-clash-reg text-lg px-2 w-fit h-[35px] border-2 border-black cursor-pointer focus:shadow-h-neubrutal outline-0 rounded-xl ease-in duration-75">
                            <option {{isset($_GET['car_gearbox']) ? $_GET['car_gearbox'] == "0" || $_GET['car_gearbox'] == "" ? "selected":"" : ""}}></option>
                            <option
                                value="1" {{isset($_GET['car_gearbox']) ? $_GET['car_gearbox'] == "1" ? "selected":"" : ""}}>
                                Manuāla
                            </option>
                            <option
                                value="2" {{isset($_GET['car_gearbox']) ? $_GET['car_gearbox'] == "2" ? "selected":"" : ""}}>
                                Automāts
                            </option>
                        </select>
                    </div>
                    <div class="mx-3 my-1">
                        <p class="ml-2 text-text text-md font-clash-reg">Virs. tips:</p>
                        <select name="car_body_type"
                                class="flex items-center font-clash-reg text-lg px-2 w-fit h-[35px] border-2 border-black cursor-pointer focus:shadow-h-neubrutal outline-0 rounded-xl ease-in duration-75">
                            <option {{isset($_GET['car_body_type']) ? $_GET['car_body_type'] == "0" || $_GET['car_body_type'] == "" ? "selected":"" : ""}}></option>
                            <option
                                value="1" {{isset($_GET['car_body_type']) ? $_GET['car_body_type'] == "1" ? "selected":"" : ""}}>
                                Apvidus
                            </option>
                            <option
                                value="2" {{isset($_GET['car_body_type']) ? $_GET['car_body_type'] == "2" ? "selected":"" : ""}}>
                                Hečbeks
                            </option>
                            <option
                                value="3" {{isset($_GET['car_body_type']) ? $_GET['car_body_type'] == "3" ? "selected":"" : ""}}>
                                Sedans
                            </option>
                            <option
                                value="4" {{isset($_GET['car_body_type']) ? $_GET['car_body_type'] == "4" ? "selected":"" : ""}}>
                                Universāls
                            </option>
                            <option
                                value="5" {{isset($_GET['car_body_type']) ? $_GET['car_body_type'] == "5" ? "selected":"" : ""}}>
                                Kabriolets
                            </option>
                            <option
                                value="6" {{isset($_GET['car_body_type']) ? $_GET['car_body_type'] == "6" ? "selected":"" : ""}}>
                                Kupeja
                            </option>
                            <option
                                value="7" {{isset($_GET['car_body_type']) ? $_GET['car_body_type'] == "7" ? "selected":"" : ""}}>
                                Mikroautobuss
                            </option>
                            <option
                                value="8" {{isset($_GET['car_body_type']) ? $_GET['car_body_type'] == "8" ? "selected":"" : ""}}>
                                Minivens
                            </option>
                            <option
                                value="9" {{isset($_GET['car_body_type']) ? $_GET['car_body_type'] == "9" ? "selected":"" : ""}}>
                                Pikaps
                            </option>
                        </select>
                    </div>
                    <div class="mx-3 my-1">
                        <p class="ml-2 text-text text-md font-clash-reg">Krāsa:</p>
                        <select name="colour"
                                class="flex items-center font-clash-reg text-lg px-2 w-fit h-[35px] border-2 border-black cursor-pointer focus:shadow-h-neubrutal outline-0 rounded-xl ease-in duration-75">
                            <option {{isset($_GET['colour']) ? $_GET['colour'] == "0" || $_GET['colour'] == "" ? "selected":"" : ""}}></option>
                            <option
                                value="#ffffff" {{isset($_GET['colour']) ? $_GET['colour'] == "#ffffff" ? "selected":"" : ""}}>
                                Balta
                            </option>
                            <option
                                value="#967E76" {{isset($_GET['colour']) ? $_GET['colour'] == "#967E76" ? "selected":"" : ""}}>
                                Brūna
                            </option>
                            <option
                                value="#FFD966" {{isset($_GET['colour']) ? $_GET['colour'] == "#FFD966" ? "selected":"" : ""}}>
                                Dzeltena
                            </option>
                            <option
                                value="#B4E4FF" {{isset($_GET['colour']) ? $_GET['colour'] == "#B4E4FF" ? "selected":"" : ""}}>
                                Gaiši zila
                            </option>
                            <option
                                value="#000000" {{isset($_GET['colour']) ? $_GET['colour'] == "#000000" ? "selected":"" : ""}}>
                                Melna
                            </option>
                            <option
                                value="#FAAB78" {{isset($_GET['colour']) ? $_GET['colour'] == "#FAAB78" ? "selected":"" : ""}}>
                                Oranža
                            </option>
                            <option
                                value="#B7B7B7" {{isset($_GET['colour']) ? $_GET['colour'] == "#B7B7B7" ? "selected":"" : ""}}>
                                Pelēka
                            </option>
                            <option
                                value="#EF4B4B" {{isset($_GET['colour']) ? $_GET['colour'] == "#EF4B4B" ? "selected":"" : ""}}>
                                Sarkana
                            </option>
                            <option
                                value="#F9F9F9" {{isset($_GET['colour']) ? $_GET['colour'] == "#F9F9F9" ? "selected":"" : ""}}>
                                Sudraba
                            </option>
                            <option
                                value="#BD574E" {{isset($_GET['colour']) ? $_GET['colour'] == "#BD574E" ? "selected":"" : ""}}>
                                Tumši sarkana
                            </option>
                            <option
                                value="#B689B0" {{isset($_GET['colour']) ? $_GET['colour'] == "#B689B0" ? "selected":"" : ""}}>
                                Violeta
                            </option>
                            <option
                                value="#B0E0A8" {{isset($_GET['colour']) ? $_GET['colour'] == "#B0E0A8" ? "selected":"" : ""}}>
                                Zaļa
                            </option>
                            <option
                                value="#6096B4" {{isset($_GET['colour']) ? $_GET['colour'] == "#6096B4" ? "selected":"" : ""}}>
                                Zila
                            </option>
                            <option
                                value="cita" {{isset($_GET['colour']) ? $_GET['colour'] == "cita" ? "selected":"" : ""}}>
                                Cita
                            </option>
                        </select>
                    </div>
                    <div class="mx-3 my-1">
                        <p class="ml-2 text-text text-md font-clash-reg">Režīms:</p>
                        <select
                            class="flex items-center font-clash-reg text-lg px-2 w-fit h-[35px] border-2 border-black cursor-pointer focus:shadow-h-neubrutal outline-0 rounded-xl ease-in duration-75">
                            <option value="1" selected>Saraksts</option>
                            <option value="2">Albums</option>
                        </select>
                    </div>
                    <div class="mx-3 my-1">
                        <p class="ml-2 text-text text-md font-clash-reg">Rajons:</p>
                        <select name="location"
                                class="flex items-center font-clash-reg text-lg px-2 w-fit h-[35px] border-2 border-black cursor-pointer focus:shadow-h-neubrutal outline-0 rounded-xl ease-in duration-75">
                            <option {{isset($_GET['location']) == "selected" ? $_GET['location'] == "0" || $_GET['location'] == "" ? "selected":"" : ""}}>
                                Visi sludinājumi
                            </option>
                            <option
                                value="1" {{isset($_GET['location']) ? $_GET['location'] == "1" ? "selected":"" : ""}}>
                                Rīga
                            </option>
                            <option
                                value="2" {{isset($_GET['location']) ? $_GET['location'] == "2" ? "selected":"" : ""}}>
                                Jūrmala
                            </option>
                            <option
                                value="3" {{isset($_GET['location']) ? $_GET['location'] == "3" ? "selected":"" : ""}}>
                                Rīgas rajons
                            </option>
                            <option
                                value="4" {{isset($_GET['location']) ? $_GET['location'] == "4" ? "selected":"" : ""}}>
                                Aizkraukle un raj.
                            </option>
                            <option
                                value="5" {{isset($_GET['location']) ? $_GET['location'] == "5" ? "selected":"" : ""}}>
                                Alūksne un raj.
                            </option>
                            <option
                                value="6" {{isset($_GET['location']) ? $_GET['location'] == "6" ? "selected":"" : ""}}>
                                Balvi un raj.
                            </option>
                            <option
                                value="7" {{isset($_GET['location']) ? $_GET['location'] == "7" ? "selected":"" : ""}}>
                                Bauska un raj.
                            </option>
                            <option
                                value="8" {{isset($_GET['location']) ? $_GET['location'] == "8" ? "selected":"" : ""}}>
                                Cēsis un raj.
                            </option>
                            <option
                                value="9" {{isset($_GET['location']) ? $_GET['location'] == "9" ? "selected":"" : ""}}>
                                Daugavpils un raj.
                            </option>
                            <option
                                value="10" {{isset($_GET['location']) ? $_GET['location'] == "10" ? "selected":"" : ""}}>
                                Dobele un raj.
                            </option>
                            <option
                                value="11" {{isset($_GET['location']) ? $_GET['location'] == "11" ? "selected":"" : ""}}>
                                Gulbene un raj.
                            </option>
                            <option
                                value="12" {{isset($_GET['location']) ? $_GET['location'] == "12" ? "selected":"" : ""}}>
                                Jēkabpils un raj.
                            </option>
                            <option
                                value="13" {{isset($_GET['location']) ? $_GET['location'] == "13" ? "selected":"" : ""}}>
                                Jelgava un raj.
                            </option>
                            <option
                                value="14" {{isset($_GET['location']) ? $_GET['location'] == "14" ? "selected":"" : ""}}>
                                Krāslava un raj.
                            </option>
                            <option
                                value="15" {{isset($_GET['location']) ? $_GET['location'] == "15" ? "selected":"" : ""}}>
                                Kuldīga un raj.
                            </option>
                            <option
                                value="16" {{isset($_GET['location']) ? $_GET['location'] == "16" ? "selected":"" : ""}}>
                                Liepāja un raj.
                            </option>
                            <option
                                value="17" {{isset($_GET['location']) ? $_GET['location'] == "17" ? "selected":"" : ""}}>
                                Limbaži un raj.
                            </option>
                            <option
                                value="18" {{isset($_GET['location']) ? $_GET['location'] == "18" ? "selected":"" : ""}}>
                                Ludza un raj.
                            </option>
                            <option
                                value="19" {{isset($_GET['location']) ? $_GET['location'] == "19" ? "selected":"" : ""}}>
                                Madona un raj.
                            </option>
                            <option
                                value="20" {{isset($_GET['location']) ? $_GET['location'] == "20" ? "selected":"" : ""}}>
                                Ogre un raj.
                            </option>
                            <option
                                value="21" {{isset($_GET['location']) ? $_GET['location'] == "21" ? "selected":"" : ""}}>
                                Preiļi un raj.
                            </option>
                            <option
                                value="22" {{isset($_GET['location']) ? $_GET['location'] == "22" ? "selected":"" : ""}}>
                                Rēzekne un raj.
                            </option>
                            <option
                                value="23" {{isset($_GET['location']) ? $_GET['location'] == "23" ? "selected":"" : ""}}>
                                Saldus un raj.
                            </option>
                            <option
                                value="24" {{isset($_GET['location']) ? $_GET['location'] == "24" ? "selected":"" : ""}}>
                                Talsi un raj.
                            </option>
                            <option
                                value="25" {{isset($_GET['location']) ? $_GET['location'] == "25" ? "selected":"" : ""}}>
                                Tukums un raj.
                            </option>
                            <option
                                value="26" {{isset($_GET['location']) ? $_GET['location'] == "26" ? "selected":"" : ""}}>
                                Valka un raj.
                            </option>
                            <option
                                value="27" {{isset($_GET['location']) ? $_GET['location'] == "27" ? "selected":"" : ""}}>
                                Valmiera un raj.
                            </option>
                            <option
                                value="28" {{isset($_GET['location']) ? $_GET['location'] == "28" ? "selected":"" : ""}}>
                                Ventspils un raj.
                            </option>
                            <option
                                value="29" {{isset($_GET['location']) ? $_GET['location'] == "29" ? "selected":"" : ""}}>
                                Igaunija
                            </option>
                            <option
                                value="30" {{isset($_GET['location']) ? $_GET['location'] == "30" ? "selected":"" : ""}}>
                                Lietuva
                            </option>
                        </select>
                    </div>
                    <div class="mx-3 my-1">
                        <p class="ml-2 text-text text-md font-clash-reg">Darījuma veids:</p>
                        <select name="deal_type"
                                class="flex items-center font-clash-reg text-lg px-2 w-fit h-[35px] border-2 border-black cursor-pointer focus:shadow-h-neubrutal outline-0 rounded-xl ease-in duration-75">
                            <option {{isset($_GET['deal_type']) == "selected" ? $_GET['deal_type'] == "0" || $_GET['deal_type'] == "" ? "selected":"" : ""}}>
                                Visi
                            </option>
                            <option
                                value="1" {{isset($_GET['deal_type']) ? $_GET['deal_type'] == "1" ? "selected":"" : ""}}>
                                Pārdod
                            </option>
                            <option
                                value="2" {{isset($_GET['deal_type']) ? $_GET['deal_type'] == "2" ? "selected":"" : ""}}>
                                Pērk
                            </option>
                            <option
                                value="3" {{isset($_GET['deal_type']) ? $_GET['deal_type'] == "3" ? "selected":"" : ""}}>
                                Maina
                            </option>
                            <option
                                value="4" {{isset($_GET['deal_type']) ? $_GET['deal_type'] == "4" ? "selected":"" : ""}}>
                                Dažādi
                            </option>
                            <option
                                value="5" {{isset($_GET['deal_type']) ? $_GET['deal_type'] == "5" ? "selected":"" : ""}}>
                                Rezerves daļas
                            </option>
                            <option
                                value="6" {{isset($_GET['deal_type']) ? $_GET['deal_type'] == "6" ? "selected":"" : ""}}>
                                Noma
                            </option>
                        </select>
                    </div>
                    <div class="mx-3 my-1">
                        <p class="ml-2 text-text text-md font-clash-reg">Modelis:</p>
                        <select name="model"
                                class="flex items-center font-clash-reg text-lg px-2 w-fit h-[35px] border-2 border-black cursor-pointer focus:shadow-h-neubrutal outline-0 rounded-xl ease-in duration-75">
                            <option {{isset($_GET['model']) == "selected" ? $_GET['model'] == "Visi" || $_GET['model'] == "" ? "selected":"" : ""}}>
                                Visi
                            </option>
                            @foreach($models as $model)
                                <option
                                    value="{{$model->model}}" {{isset($_GET['model']) ? $_GET['model'] == $model->model ? "selected":"" : ""}}>{{$model->model}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex flex-col self-end ml-9 w-fit h-fit">
                    <button
                        class="flex justify-center items-center w-16 h-16 border-2 rounded-full bg-white duration-75 ease-in text-black hover:text-text hover:border-text"
                        type="reset">{{ svg('eos-restart-alt', 'w-6') }}</button>
                    <button
                        class="flex justify-center mt-1 items-center w-16 h-16 border-2 rounded-full bg-black duration-75 ease-in text-white hover:text-accent"
                        type="submit">{{ svg('eos-search', 'w-6') }}</button>
                </div>
            </form>
            <table>
                <thead>
                <tr class="bg-black">
                    <th scope="col"
                        class="px-3 xl:px-6 py-2 w-3/5 text-left font-clash-med text-clamp-xl text-white tracking-wider">
                        <div class="flex justify-between">
                            <a href="">Sludinājumi</a>
                            <a href="">Datums</a>
                        </div>
                    </th>
                    <th scope="col" class="px-3 xl:px-6 py-2 font-clash-med text-clamp-xl text-white tracking-wider">
                        <a href="">Modelis</a>
                    </th>
                    <th scope="col"
                        class="hidden lg:table-cell px-3 xl:px-6 py-2 font-clash-med text-clamp-xl text-white tracking-wider">
                        <a href="">Gads</a>
                    </th>
                    <th scope="col"
                        class="hidden lg:table-cell px-3 xl:px-6 py-2 font-clash-med text-clamp-xl text-white tracking-wider">
                        <a href="">Tilp.</a>
                    </th>
                    <th scope="col"
                        class="hidden xl:table-cell px-6 py-2 font-clash-med text-clamp-xl text-white tracking-wider">
                        <a href="">Nobrauk.</a>
                    </th>
                    <th scope="col" class="px-3 xl:px-6 py-2 font-clash-med text-clamp-xl text-white tracking-wider">
                        <a href="">Cena</a>
                    </th>
                </tr>
                </thead>
                <tbody class="divide-y divide-text divide-dashed">
                @foreach($advertisements as $ad)
                    <tr class="clickable-row cursor-pointer divide-x divide-text divide-dashed hover:bg-background"
                        data-href="{{ isset($_subcategory2) ?
                          route('_advertisement.show', [
                            'category' => $_category->url,
                            'subcategory' => $_subcategory->url,
                            '_subcategory' => $_subcategory2->url,
                            'ad' => $ad->id,
                          ]) :
                          route('advertisement.show', [
                            'category' => $_category->url,
                            'subcategory' => $_subcategory->url,
                            'ad' => $ad->id,
                          ])
                        }}
                        ">
                        <td class="flex items-center my-0 lg:my-1 overflow-clip">
                            <div class="flex items-center justify-center w-1/3 xl:w-1/5 h-[12dvh] overflow-clip">
                                <img class="h-fit w-full" src="{{asset('assets/car_demo.jpeg')}}" alt="ad_img">
                            </div>
                            <p class="px-3 xl:px-6 font-clash-reg text-text text-clamp-xl w-2/3 xl:w-4/5 line-clamp-2">
                                {{$ad->ad_text}}
                            </p>
                        </td>
                        <td class="text-center text-clamp-xl font-clash-sbol uppercase px-3 xl:px-6">
                            {{$ad->model}}
                        </td>
                        <td class="hidden lg:table-cell text-center text-clamp-xl font-clash-med px-3 xl:px-6">
                            {{$ad->car_manufacturing_year}}
                        </td>
                        <td class="hidden lg:table-cell text-center text-clamp-xl font-clash-med px-3 xl:px-6">
                            {{number_format($ad->engine_capacity, 1, '.')}}
                        </td>
                        <td class="hidden xl:table-cell text-center text-clamp-xl font-clash-med px-3 xl:px-6 whitespace-nowrap">
                            {{number_format((float) $ad->car_mileage, 0, '.', ' ')}}
                            km
                        </td>
                        <td class="text-center text-clamp-xl font-clash-sbol px-3 xl:px-6 whitespace-nowrap">
                            <span
                                class="flex items-center justify-center tracking-wide">
                                {{number_format((float) $ad->price, 0, '.', ' ')}}
                                {{ svg('eos-euro', 'text-black w-4 lg:w-6 ml-0 lg:ml-1') }}
                            </span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @if($advertisements->count() == 0)
                <div class="flex justify-center items-center h-[10vh] mt-16"><p
                        class="px-20 py-10 border-2 text-black font-clash-reg text-clamp-xl">Sludinājumi dotajā
                        kategorijā nav atrasti</p></div>
            @endif
            <div class="flex items-center justify-center my-6">
                {{$advertisements->withQueryString()->links()}}
            </div>
        </div>
    </section>
@endsection
