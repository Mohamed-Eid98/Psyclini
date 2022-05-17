@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-numbers">@lang('pagination.previous')</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())

                <div class="nav-links">       
                  <span aria-current="page" class="page-numbers current">1</span>
                    <a class="page-numbers" href="{{ $paginator->nextPageUrl() }}">@lang('pagination.next')</a>
     
                  </div>
                  @else
                  <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                      <span class="page-numbers" aria-hidden="true"><i class="icofont-thin-double-right"></i></span>
                  </li>
                @endif
                
            </ul>
        </div>



            <div>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-numbers" aria-hidden="true"><i class="icofont-thin-double-left"></i></span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="icofont-thin-double-left"></i></a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span class="page-numbers">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active" aria-current="page"><span class="page-numbers current">{{ $page }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="icofont-thin-double-right"></i></a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-numbers" aria-hidden="true"><i class="icofont-thin-double-right"></i></span>
                        </li>
                   @endif
                </ul>
            </div>
        </div>
    </nav>
@endif
