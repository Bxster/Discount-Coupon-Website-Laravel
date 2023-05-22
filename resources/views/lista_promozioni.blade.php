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
            <span class="icon"><i class="fa fa-search"></i></span>
            <input type="search" id="search" placeholder="Cerca il coupon che fa per te" />
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-8 mx-auto">
        <ul class="list-group mt-4">
            @foreach($promozioni as $promozione)
            <li class="list-group-item">
            <a href="#" class="promotion-link">
                <div class="promotion">
                <img src="{{ asset('path/to/promotion-image.jpg') }}" alt="Promotion Image" class="promotion-image">
                <div class="promotion-details">
                    <h3 class="promotion-title">{{ $promozione->titolo }}</h3>
                    <p class="promotion-description">{{ $promozione->descrizione }}</p>
                </div>
                </div>
            </a>
            </li>
            @endforeach
        </ul>
        </div>
    </div>
    </div>
</section>
<!-- end catalogo section -->

@endsection