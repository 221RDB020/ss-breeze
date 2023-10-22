@extends('layouts.main')
@section('content')
    <section class="flex sm:flex-row flex-col h-[80dvh] border-b-[3px] border-black lg:px-24 pt-8 pb-20">
        <div class="relative flex flex-col">
            <h2 class="text-black font-clash-sbol text-clamp-4xl">Izveido jaunu kategoriju</h2>
            <div class="flex flex-col max-h-[calc(80dvh-16rem)] mt-8 bg-white pl-10 pr-2 py-5 rounded-xl">
                <h4 class="text-clamp-2xl text-black font-clash-med mb-2">Kategoriju saraksts:</h4>
                <ul class="overflow-y-scroll scroll rounded-xl">
                    @if(empty($mainCategories))
                        <li id="category" class="text-text font-clash-reg pb-0.5">Pašreiz nav nevienas kategorijas</li>
                    @else
                        @foreach ($mainCategories as $category)
                            <ul class="mb-2 mr-2">
                                <li id="mainCategory" class="relative flex items-center py-1 px-1 text-black text-clamp-md font-clash-med cursor-pointer hover:bg-background">
                                    {{$category->name}}
                                    {{ svg('eos-arrow-drop-down', 'w-6 absolute right-1') }}
                                </li>
                                <ul class="ml-4">
                                    @foreach($allCategories as $subcategory)
                                        @if($subcategory->parent_id == $category->id)
                                            <li class="relative flex items-center text-text text-clamp-md font-clash-reg cursor-pointer hover:bg-background">
                                                {{$subcategory->name}}
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </ul>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="flex flex-col ml-0 sm:ml-10 bg-white pl-10 pr-2 py-5 rounded-xl w-full min-h-full">
            <form id="form" class="flex flex-col items-start justify-between min-h-full"
                  action="{{route('category.store')}}" method="post">
                @csrf
                <input class="parent_id" type="hidden" name="parent_id" value="">
                <p class="text-text font-clash-reg pb-5">* izvēlies kategoriju no saraksta, ja vēlies izveidot
                    apakškategoriju</p>
                <div class="flex flex-row">
                    <div class="mr-24 mb-16">
                        <h4 class="text-clamp-2xl text-black font-clash-med pb-4">Norādi kategorijas nosaukumu</h4>
                        <input type="text" name="name" placeholder="Nosaukums"
                               class="mx-4 py-2 px-4 min-w-[10vw] font-clash-reg rounded-xl border-[3px] border-black shadow-neubrutal hover:shadow-h-neubrutal ease-in duration-100 outline-0">
                    </div>
                    <div>
                        <h4 class="text-clamp-2xl text-black font-clash-med pb-4">Norādi ceļu</h4>
                        <input type="text" name="url" placeholder="Ceļš"
                               class="mx-4 py-2 px-4 min-w-[10vw] font-clash-reg rounded-xl border-[3px] border-black shadow-neubrutal hover:shadow-h-neubrutal ease-in duration-100 outline-0">
                    </div>
                </div>
                <div>
                    <h4 class="text-clamp-2xl text-black font-clash-med">Izvēlies kategorijas ikonu</h4>
                    <p class="text-sm font-clash-reg text-text">* ja nav nepieciešama var neizvēlēties</p>
                    <div class="grid grid-cols-6 gap-2 mx-4 mt-6 mb-20">
                        <div class="icon bg-white hover:bg-background border-[2px] border-text rounded-xl"
                             data-icon="icon"
                             field-value="eos-business-center">{{svg("eos-business-center", 'text-text w-12 cursor-pointer p-2 h-12')}}</div>
                        <div class="icon bg-white hover:bg-background border-[2px] border-text rounded-xl"
                             data-icon="icon"
                             field-value="eos-directions-car">{{svg("eos-directions-car", 'text-text w-12 cursor-pointer p-2 h-12')}}</div>
                        <div class="icon bg-white hover:bg-background border-[2px] border-text rounded-xl"
                             data-icon="icon"
                             field-value="eos-house">{{svg("eos-house", 'text-text w-12 cursor-pointer p-2 h-12')}}</div>
                        <div class="icon bg-white hover:bg-background border-[2px] border-text rounded-xl"
                             data-icon="icon"
                             field-value="fas-hammer">{{svg("fas-hammer", 'text-text w-12 cursor-pointer p-2 h-12')}}</div>
                        <div class="icon bg-white hover:bg-background border-[2px] border-text rounded-xl"
                             data-icon="icon"
                             field-value="eos-laptop-mac">{{svg("eos-laptop-mac", 'text-text w-12 cursor-pointer p-2 h-12')}}</div>
                        <div class="icon bg-white hover:bg-background border-[2px] border-text rounded-xl"
                             data-icon="icon"
                             field-value="fas-tshirt">{{svg("fas-tshirt", 'text-text w-12 cursor-pointer p-2 h-12')}}</div>
                        <div class="icon bg-white hover:bg-background border-[2px] border-text rounded-xl"
                             data-icon="icon"
                             field-value="eos-chair">{{svg("eos-chair", 'text-text w-12 cursor-pointer p-2 h-12')}}</div>
                        <div class="icon bg-white hover:bg-background border-[2px] border-text rounded-xl"
                             data-icon="icon"
                             field-value="zondicon-factory">{{svg("zondicon-factory", 'text-text w-12 cursor-pointer p-2 h-12')}}</div>
                        <div class="icon bg-white hover:bg-background border-[2px] border-text rounded-xl"
                             data-icon="icon"
                             field-value="gmdi-toys-r">{{svg("gmdi-toys-r", 'text-text w-12 cursor-pointer p-2 h-12')}}</div>
                        <div class="icon bg-white hover:bg-background border-[2px] border-text rounded-xl"
                             data-icon="icon"
                             field-value="fas-cat">{{svg("fas-cat", 'text-text w-12 cursor-pointer p-2 h-12')}}</div>
                        <div class="icon bg-white hover:bg-background border-[2px] border-text rounded-xl"
                             data-icon="icon"
                             field-value="fas-tractor">{{svg("fas-tractor", 'text-text w-12 cursor-pointer p-2 h-12')}}</div>
                        <div class="icon bg-white hover:bg-background border-[2px] border-text rounded-xl"
                             data-icon="icon"
                             field-value="fontisto-island">{{svg("fontisto-island", 'text-text w-12 cursor-pointer p-2 h-12')}}</div>
                        <input class="icon-input" type="hidden" name="icon" value="">
                    </div>
                </div>
                <div class="flex items-center self-end px-10 pb-6">
                    <a href="{{route('category.index')}}" class="font-clash-reg text-lg">Atpakaļ</a>
                    <input type="submit" value="Izveidot"
                           class="ml-10 text-white font-clash-reg text-xl py-2 px-10 bg-black rounded-xl shadow-neubrutal hover:shadow-h-neubrutal ease-in duration-100 cursor-pointer">
                </div>
            </form>
        </div>
    </section>
    <script>
        const iconItems = document.querySelectorAll('.icon');
        const iconInput = document.querySelector('.icon-input');
        let activeItem;

        iconItems.forEach(item => {
            item.addEventListener('click', () => {
                if (activeItem && activeItem !== item) {
                    activeItem.classList.remove('bg-background');
                    activeItem.classList.add('bg-white');
                }

                item.classList.remove('bg-white');
                item.classList.add('bg-background');
                activeItem = item;
                iconInput.value = item.getAttribute('field-value');
            });
        });

        const categoryItems = document.querySelectorAll('#category');
        const categoryInput = document.querySelector('.parent_id');
        let activeCategory;

        categoryItems.forEach(item => {
            item.addEventListener('click', () => {
                if (activeCategory && activeCategory !== item) {
                    activeCategory.classList.remove('bg-background');
                    activeCategory.classList.add('bg-white');
                }

                item.classList.remove('bg-white');
                item.classList.add('bg-background');
                activeCategory = item;
                categoryInput.value = item.getAttribute('data-id');
            });
        });
    </script>
@endsection
