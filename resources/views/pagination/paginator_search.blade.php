@if ($paginator->lastPage() != 1)
    <div id="pagination">
        {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} di {{ $paginator->total() }} ---

        <!-- Link alla prima pagina -->
        @if (!$paginator->onFirstPage())
        <a href="#" onclick="event.preventDefault(); document.getElementById('form-pagination').submit();">Inizio</a> |
        <form id="form-pagination" method="POST" action="{{ route('lista_aziende_search') }}"></input>
         @csrf
        <input type="hidden" name="page" value="1">
        </form>
        @else 
            Inizio |
         @endif


        <!-- Link alla pagina precedente -->
        @if ($paginator->currentPage() != 1)
        <a href="#" onclick="event.preventDefault(); document.getElementById('form-pagination').submit();">&lt; Precedente</a> |
            <form id='form-pagination' method="POST" action="{{ route('lista_aziende_search') }}">
                @csrf
                <input type="hidden" name="page" value="{{ $paginator->previousPageUrl() }}"></input>
            </form>
        @else
            &lt; Precedente |
        @endif

        <!-- Link alla pagina successiva -->
        @if ($paginator->hasMorePages())
        <a href="#" onclick="event.preventDefault(); document.getElementById('form-pagination').submit();">Successivo &gt;</a> 

            <form id='form-pagination' method="POST" action="{{ route('lista_aziende_search') }}">
                @csrf
                <input type="hidden" name="page" value="{{ $paginator->nextPageUrl() }}"></input>
            </form>
        @else
            Successivo &gt; |
        @endif

        <!-- Link all'ultima pagina -->
        @if ($paginator->hasMorePages())
        <a href="#" onclick="event.preventDefault(); document.getElementById('form-pagination').submit();">Fine</a>
            <form id = 'form-pagination'method="POST" action="{{ route('lista_aziende_search') }}">
                @csrf
                <input type="hidden" name="page" value="{{ $paginator->lastPage() }}"></input>
            </form>
        @else
            Fine
        @endif
    </div>
@endif
