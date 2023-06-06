@extends('layouts.public')

@section('title', 'Lista Utenti')

@section('content')


<section class="how_section layout_padding">
  <div class="heading_container1">
    <h2>
      LISTA UTENTI
    </h2>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="container-1">
          <form action="{{ route('elenco_utenti_search') }}">
            @csrf
            <input type="text" name="query" placeholder="Cerca utenti" onkeydown="if(event.keyCode===13){event.preventDefault(); this.form.submit();}">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div>



    <div class="row mb-4">
      <div class="col-md-8 mx-auto">
        <ul class="list-group mt-4">
          @foreach ($users as $user)
          <li class="list-group-item">
            <a href="{{ route('admin.visualizzaUtente', $user->userId) }}" class="promotion-link">
              <div class="promotion">
                <img src="images/profilodefault1.jpg" alt="" class="immagine-ridotta">
                <div class="promotion-details">
                  <h1 class="promotion-title">{{ $user->username }}</h1>
                  <h4 class="promotion-description">{{ $user->name }} {{ $user->surname }}</h4>
                </div>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
</section>

@endsection