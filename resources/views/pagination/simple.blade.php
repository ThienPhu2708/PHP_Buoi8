@if ($paginator->hasPages())
<div class="pager">
    @if ($paginator->onFirstPage())
        <span class="disabled">&laquo; Trước</span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}">&laquo; Trước</a>
    @endif

    @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
        @if ($page == $paginator->currentPage())
            <span class="current">{{ $page }}</span>
        @else
            <a href="{{ $url }}">{{ $page }}</a>
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}">Sau &raquo;</a>
    @else
        <span class="disabled">Sau &raquo;</span>
    @endif

    <div style="margin-top:6px">Hiển thị {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} / {{ $paginator->total() }} kết quả</div>
</div>
@endif
