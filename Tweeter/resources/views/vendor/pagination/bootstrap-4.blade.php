@if ($paginator->hasPages())
            <nav class="white transparent z-depth-0">
                <div class="nav-wrapper">
                <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled  green-text text-dark-3" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link  green-text text-dark-3" aria-hidden="true"><h5> &lsaquo;</h5></span>
                </li>
            @else
                <li class="page-item text-darken-4">
                    <a class="page-link green-text text-dark-3" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><h5>&lsaquo;</h5></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled " aria-disabled="true"><span class="page-link text-darken-4"><h5>{{ $element }}</h5></span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active white lighten-3 green-text text-dark-3" aria-current="page"><span class="page-link green-text text-dark-3"><h5>{{ $page }}</h5></span></li>
                        @else
                            <li class="page-item green-text text-dark-3"><a class="page-link" href="{{ $url }}"><h5>{{ $page }}</h5></a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item text-darken-4">
                    <a class="page-link green-text text-dark-3 " href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><h5>&rsaquo;</h5></a>
                </li>
            @else
                <li class="page-item disabled green-text text-dark-3" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true"><h5>&rsaquo;</h5></span>
                </li>
            @endif
        </ul>
    </div>
    </nav>
@endif

