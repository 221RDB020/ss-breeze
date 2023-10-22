<div class="flex h-12 md:bg-white md:rounded-xl md:border-[3px] md:shadow-neubrutal mt-2">
    <div class="flex ml-2 md:ml-5 items-center">
        <a href="{{ route('category.index') }}">{{ svg('eos-home', 'w-7 text-black') }}</a>
        {{ svg('eos-keyboard-arrow-right', 'w-10 mx-0 sm:mx-1 text-black') }}
        <a href="{{ route('category.show', ['category' => $category->url]) }}" class="font-clash-reg text-clamp-2xl text-black leading-4">{{$category->name}}</a>
        {{ svg('eos-keyboard-arrow-right', 'w-10 mx-0 sm:mx-1 text-black') }}
        @if($subcategory && count($subcategory->children) != 0)
            <a href="{{ route('subcategory.index', ['category' => $category->url, 'subcategory' => $subcategory->url]) }}" class="font-clash-reg text-clamp-2xl text-black leading-4">{{$subcategory->name}}</a>
            {{ svg('eos-keyboard-arrow-right', 'w-10 mx-0 sm:mx-1 text-black') }}
        @elseif ($subcategory)
            <a href="{{ route('advertisement.index', ['category' => $category->url, 'subcategory' => $subcategory->url]) }}" class="font-clash-reg text-clamp-2xl text-black leading-4">{{$subcategory->name}}</a>
            {{ svg('eos-keyboard-arrow-right', 'w-10 mx-0 sm:mx-1 text-black') }}
        @endif
        @if($subcategory2)
            <a href="{{ route('_advertisement.index', ['category' => $category->url, 'subcategory' => $subcategory->url, '_subcategory' => $subcategory2->url]) }}" class="font-clash-reg text-clamp-2xl text-black leading-4">{{$subcategory2->name}}</a>
            {{ svg('eos-keyboard-arrow-right', 'w-10 mx-0 sm:mx-1 text-black') }}
        @endif
    </div>
</div>
