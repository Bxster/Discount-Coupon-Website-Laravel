@extends('layouts.public')

@section('title', 'Pagina Profilo')

@section('content')

<!-- profile section -->

<section>
<div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="heading_container">
            <h2>
              Pagina profilo di {{ $user->name }}
            </h2>
          </div>
        <div class="profile-info">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="nome">Nome:</label>
                <p id="nome">{{ $user->name }}</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="cognome">Cognome:</label>
                <p id="cognome">{{ $user->surname }}</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="username">Username:</label>
                <p id="username">{{ $user->username }}</p>
              </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                  <label for="password">Password:</label>
                  <p id="password">********</p>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="email">Email:</label>
                <p id="email">{{ $user->email }}</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="telefono">Telefono:</label>
                <p id="telefono">{{ $user->cellulare }}</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="genere">Genere:</label>
                <p id="genere">@if ($user->genere == 0)
                      Maschio
                  @elseif ($user->genere == 1)
                          Femmina
                  @endif
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="data-nascita">Data di nascita:</label>
                <p id="data-nascita">{{ $user->dataNascita }}</p>
              </div>
            </div>
          </div>
          @can('isAdmin')
                  <div class="col-md-12">
                      <div class="mb-3">
                          <label for="coupon">Numero di coupon generati:</label>
                          <p id="coupon">{{ $user->coupon }}</p>
                      </div>
                  </div>
          @endcan

            <div class="col-md-6">
                <div class="mb-3">
                  @can('isUser')
                  <div class="info_form ">
                  <a href="{{ route('pagina_modifica', ['userId' => $user->userId]) }}">
                  <button type="button" class="btn btn-success">Modifica</button>
                  </a>
                  @endcan
                  @can('isAdmin')
                  <form action="{{ route('admin.user.destroy', ['userId' => $user->userId]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                  <button type="submit" class="btn btn-success">Elimina</button>
                  </form>
                  @endcan
                  </div>
                </div>
            </div>
            </div> 

            <h1>Coupon dell'utente</h1>

            @if ($coupons)

                    <ul>
                        @foreach ($coupons as $coupon)
                            <li>Promozione: {{ $coupon->coupPr->nome }}, Codice coupon: {{ $coupon->codice }}</li>
                        @endforeach
                    </ul>

            @else
                <p>Nessun coupon disponibile</p>
            @endif

        </div>
    </div>
</div>
</section>

@endsection