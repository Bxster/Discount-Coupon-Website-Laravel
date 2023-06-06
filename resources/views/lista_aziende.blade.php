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
          <form action="{{ route('lista_aziende_search') }}">
            @csrf
            <input type="text" name="query" placeholder="Cerca aziende" onkeydown="if(event.keyCode===13){event.preventDefault(); this.form.submit();}">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div>

    <div class="row mb-4">
      <div class="col-md-8 mx-auto">
        @can('isAdmin')
        <a href="{{ route('aggiunta_azienda') }}">
          <button class="btn btn-success"> Aggiungi Azienda </button>
        </a>
        @endcan
        <ul class="list-group mt-4">
          @foreach($aziende as $azienda)
          <li class="list-group-item">
            <a href="{{ route('aziendapage.show', ['aziendeId' => $azienda->aziendeId]) }}" class="promotion-link">

              <div class="promotion">
                <div class="image-container">
                  <div class="img_aziende">
                    @include('helpers/productImg', ['attrs' => 'imagefrm', 'imgFile' => $azienda->image])
                  </div>
                </div>
                <div class="promotion-details">
                  <h1 class="promotion-title">{{ $azienda->nome }}</h1>
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

<!--Paginazione-->
<div class="heading_container1">
  @include('pagination.paginator', ['paginator' => $aziende])
</div>


@endsection