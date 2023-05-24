@extends('layouts.public')

@section('title', 'PromozioniSearch')

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
    </div>
    <div>
        <div class="row mb-4">
            <div class="col-md-8 mx-auto">
                <h2>Risultati della ricerca per: {{ $query }}</h2>
                <ul class="list-group mt-4">
                    @if ($promozioni->count() > 0)
                    @foreach($promozioni as $promozione)
                    <li class="list-group-item">
                        <a href="#" class="promotion-link">
                            <div class="promotion">
                                <img src="{{$promozione->promAz->image}}" alt="Promotion Image" class="promotion-image">
                                <div class="promotion-details">
                                    <h3 class="promotion-title">{{ $promozione->nome }}</h3>
                                    <p class="promotion-description">{{ $promozione->oggetto }}</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                    @else
                    <li>Nessun risultato trovato.</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- end catalogo section -->

@endsection