@extends('layouts.public')

@section('title', 'Aziende')

@section('content')


<!-- how section -->
<section class="how_section layout_padding">
  <div class="heading_container1">
    <h2>
      LISTA AZIENDA
    </h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="container-1">
          <span class="icon"><i class="fa fa-search"></i></span>
          <input type="search" id="search" placeholder="Cerca Azienda" />
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="row mb-4">
      <div class="col-md-8 mx-auto">
        <ul class="list-group mt-4">
          @foreach($aziende as $azienda)
          <li class="list-group-item">
            <a href="#" class="custom-link">
              <div class="promotion">
                <img src="{{ $azienda->image }}" alt="{{ $azienda->nome }}" class="immagine-ridotta">
                <div class="promotion-details">
                  <h1 class="promotion-title">{{ $azienda->ragionesociale }}</h1>
                  <p class="promotion-description">{{ $azienda->desc }}</p>

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
<!-- end how section -->


@endsection