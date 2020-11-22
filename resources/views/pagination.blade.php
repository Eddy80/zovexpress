
@if ($paginator->hasPages())
    <ul class="pagination" style="width:100%;font-size:16px;text-align:center;">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled myli"><span><img src="/assets/img/bg/arrow_left.png" /></span></li>


   

        @else
            <li class="myli"><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><img src="/assets/img/bg/arrow_left.png" /></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled myli"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active myli" ><span>{{ $page }}</span></li>
                    @else
                        <li class="myli"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="myli" style="float:right;"><a href="{{ $paginator->nextPageUrl() }}" rel="next"> <img src="/assets/img/bg/arrow_right.png" /></a></li>
        @else
            <li class="disabled myli" style="float:right;"><span> <img src="/assets/img/bg/arrow_right.png" /></span></li>
        @endif
@endif        