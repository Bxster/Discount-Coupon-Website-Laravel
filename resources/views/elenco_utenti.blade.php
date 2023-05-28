@extends('layouts.public')

@section('title', 'Lista Utenti')

@section('content')


    <section class="how_section layout_padding">
  <div class="heading_container1">
    <h2>
      LISTA UTENTI
    </h2>
  </div>
    <div class="row mb-4">
      <div class="col-md-8 mx-auto">
        <ul class="list-group mt-4">
        @foreach ($users as $user)
          <li class="list-group-item">
            <a href="{{ route('admin.visualizzaStaff', $user->userId) }}" class="promotion-link">
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