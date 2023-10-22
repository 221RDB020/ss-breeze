@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="relative flex items-center justify-center px-2 py-2 text-clamp-xl font-clash-reg text-text border-2 border-background cursor-default leading-5 rounded-xl">
                {{ svg('eos-arrow-back-ios-o', 'w-5') }}
                Iepriekšējie
            </a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative flex items-center justify-center px-2 py-2 text-clamp-xl font-clash-med text-black bg-white border-2 border-black leading-5 rounded-xl hover:text-text focus:outline-none focus:ring-2 ring-accent focus:border-background active:bg-background transition ease-in-out duration-150">
                {{ svg('eos-arrow-back-ios-o', 'w-5') }}
                Iepriekšējie
            </a>
        @endif

        <div class="flex mx-3">
            <div>
                <span class="flex font-clash-reg text-text">
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex tracking-wider items-center px-2 -ml-px text-clamp-xl font-clash-reg text-text cursor-default leading-5">{{ $element }}</span>
                            </span>
                        @endif
                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="flex w-6 items-center justify-center font-clash-med cursor-pointer text-black hover:bg-background rounded-xl">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="flex w-6 items-center justify-center cursor-pointer hover:bg-background rounded-xl" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </span>
            </div>
        </div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative flex items-center justify-center px-2 py-2 text-clamp-xl font-clash-med text-black bg-white border-2 border-black leading-5 rounded-xl hover:text-text focus:outline-none focus:ring-2 ring-accent focus:border-background active:bg-background transition ease-in-out duration-150">
                Nākamie
                {{ svg('eos-arrow-forward-ios', 'w-5') }}
            </a>
        @else
            <a class="relative flex items-center justify-center px-2 py-2 text-clamp-xl font-clash-reg text-text border-2 border-background cursor-default leading-5 rounded-xl">
                Nākamie
                {{ svg('eos-arrow-forward-ios', 'w-5') }}
            </a>
        @endif
    </nav>
@endif
