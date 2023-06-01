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
                    <form action="{{ route('lista_promozioni_search') }}">
                        @csrf
                        <input type="text" name="companyQuery" placeholder="Cerca aziende" onkeydown="if(event.keyCode===13){event.preventDefault(); this.form.submit();}">
                        <input type="text" name="promotionQuery" placeholder="Cerca promozioni" onkeydown="if(event.keyCode===13){event.preventDefault(); this.form.submit();}">

                    </form>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-8 mx-auto">
                <ul class="list-group mt-4">
                    @foreach($promozioni as $promozione)
                    <li class="list-group-item">
                        <div class="promotion">
                           <!-- <img src="{{ $promozione->promAz->image }}" alt="Promotion Image" class="promotion-image"> -->
                           <img src="{{ $promozione->promAz->image }}" alt="{{ $promozione->promAz->nome }}" class="promotion-image">
                            <a href="{{route('prompage.show', ['promId' => $promozione->promId]) }}" class="promotion-link">
                                <div class="promotion-details">
                                    <h3 class="promotion-title">{{ $promozione->nome }}</h3>
                                    <p class="promotion-description">{{ $promozione->oggetto }}</p>
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
<div class="heading_container1">
    @include('pagination.paginator', ['paginator' => $promozioni])
</div>

@endsection