@extends('layouts.public')

@section('title', 'Promozioni')

@section('content')

<!-- catalogo section -->
<section class="how_section layout_padding">

    <div class="heading_container1">
    <h2>
        LISTA PROMOZIONI
    </h2>
    </div>
<div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="container-1">
                    <form action="{{ route('lista_promozioni_search') }}" method="POST">
                        @csrf
                        <input type="text" name="query" placeholder="Cerca promozioni" onkeydown="if(event.keyCode===13){event.preventDefault(); this.form.submit();}">
                    </form>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-8 mx-auto">
                <ul class="list-group mt-4">
                    <h1>Risultati della ricerca per: {{ $query }}</h1>
                    @if ($promozioni->count() > 0)
    <ul>
        @foreach ($promozioni as $promozione)
            <li>{{ $promozione->nome }} - {{ $promozione->oggetto }}</li>
        @endforeach
    </ul>
@else
    <p>Nessun risultato trovato.</p>
@endif

                </ul>
            </div>
        </div>
    </div>
</section>

<!-- end catalogo section -->

@endsection