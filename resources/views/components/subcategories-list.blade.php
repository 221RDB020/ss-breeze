@foreach($subcategories as $subcategory)
    @if(count($subcategory->children))
        <div role="rowgroup" id="subcategory-list-{{$mainCategory->id}}" class="flex cursor-pointer items-center px-16 py-4 border-b-[1px] border-lightgray snap-proximity hidden">
            <svg width="26" height="14" viewBox="0 0 26 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L13 13" stroke="black" stroke-linecap="round"/>
                <path d="M13 13L25 1" stroke="black" stroke-linecap="round"/>
            </svg>
            <span class="pl-12 text-clamp-xl font-clash-lig text-black">
                {{$subcategory->name}}
            </span>
        </div>
    @else
        <div role="row" id="subcategory-list-{{$mainCategory->id}}" aria-selected="false" class="flex cursor-pointer items-center px-16 py-2 border-b-[1px] border-lightgray snap-proximity aria-selected:bg-lightgray hidden">
            <span class="pl-20 text-clamp-lg font-clash-lig text-black">
                {{$subcategory->name}}
            </span>
        </div>
    @endif
    @if(count($subcategory->children))
        @include('components.subcategories-list',['subcategories' => $subcategory->children])
    @endif
@endforeach
