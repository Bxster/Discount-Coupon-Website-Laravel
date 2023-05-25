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
          <form action="{{ route('lista_aziende_search') }}" method="POST">
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
        <ul class="list-group mt-4">
          @foreach($aziende as $azienda)
          <li class="list-group-item">
            <a href="{{ route('aziendapage.show', ['aziendeId' => $azienda->aziendeId]) }}" class="promotion-link">
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

    <!--Paginazione-->
    <div class="heading_container1">
    @include('pagination.paginator', ['paginator' => $aziende])
</div>


@endsection