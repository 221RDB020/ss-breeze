@extends('layouts.main')
@section('content')
    <section class="flex flex-col min-h-[90dvh] lg:min-h-[80dvh] lg:px-24 sm:px-10 px-5 border-b-[3px]">
        <x-router :subcategory2="$_subcategory2 ?? null" :subcategory="$_subcategory" :category="$_category"/>
        <div
            class="grid auto-cols-min gap-4 mt-9 mb-16 px-10 py-5 bg-white rounded-xl border-[3px] shadow-neubrutal grid-flow-row sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            @php($currentHeader = "")
            @foreach($subcategoryChildren as $child)
                @if($child->category_head)
                    @if($currentHeader != $child->category_head)
                        @php($currentHeader = $child->category_head)
                        <div
                            class="text-black text-xl font-clash-med py-1 col-span-full">{{$child->category_head}}</div>
                    @endif
                @endif
                <div class="flex flex-col w-full h-full border-2 border-background rounded-xl hover:bg-background">
                    <a class="text-text text-lg font-clash-reg w-full h-full px-4 py-2"
                       href="{{route(
                    '_advertisement.index',
                    [
                        'category' => $_category->url,
                        'subcategory' => $child->parent->url,
                        '_subcategory' => $child->url,
                    ]
                )}}">
                        {{$child->name}}
                        <span class="text-accent">({{$child->advertisements->first()->advertisement_count ?? 0}})</span>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
