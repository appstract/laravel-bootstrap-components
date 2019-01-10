<nav aria-label="Page navigation">
    @php
        $paginat?? = $paginator->toArray();
    @endphp

    <ul class="pagination {{ $class ?? '' }}">
        @istrue($arrows)
            <li class="page-item">
                <a class="page-link" href="{{ $paginator['prev_page_url'] }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
        @endistrue

        @foreach($elements[0] as $page => $link)
            <li class="page-item @if($paginator['current_page'] == $page) active @endif">
                <a class="page-link" href="{{ $link }}">{!! $page !!}</a>
            </li>
        @endforeach

        @istrue($arrows)
            <li class="page-item">
                <a class="page-link" href="{{ $paginator['next_page_url'] }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        @endistrue
    </ul>
</nav>
