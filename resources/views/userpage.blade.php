@extends('layouts.public')

@section('title', 'Pagina Profilo')

@section('content')

<!-- profile section -->
<!--
<section>
<div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="heading_container">
            <h2>
              Pagina profilo
            </h2>
          </div>
        <div class="profile-info">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="nome">Nome:</label>
                <p id="nome">John</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="cognome">Cognome:</label>
                <p id="cognome">Doa</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="username">Username:</label>
                <p id="username">john_doe</p>
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
                <p id="email">john.doe@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="telefono">Telefono:</label>
                <p id="telefono">1234567890</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="genere">Genere:</label>
                <p id="genere">Maschio</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="data-nascita">Data di nascita:</label>
                <p id="data-nascita">01/01/1990</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="citta">Città:</label>
                <p id="citta">Roma</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="via">Via:</label>
                <p id="via">Via Example 123</p>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                  <label for="cap">Cap:</label>
                  <p id="cap">60121</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                  <div class="info_form ">
                  <a href="pagina_modifica_profilo.html">
                  <button type="button" class="btn btn-success">Modifica</button>
                  </a>
                  </div>
                </div>
            </div>
            </div> 
        </div>
    </div>
</div>
</section>
-->

    <div class="container">
        <h1>Profilo di {{ $user->name }}</h1>

        <div>
            <p><strong>Nome:</strong> {{ $user->name }}</p>
            <p><strong>Cognome:</strong> {{ $user->surname }}</p>
            <p><strong>Cellulare:</strong> {{ $user->cellulare }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Username:</strong> {{ $user->username }}</p>
            <p><strong>Password:</strong> ********</p>

            <p><strong>Genere:</strong>
            @if ($user->genere == 0)
                Uomo
            @elseif ($user->genere == 1)
                Donna
            @endif
            </p>

            <p><strong>Data di Nascita:</strong> {{ $user->dataNascita }}</p>
        </div>
    </div>

<!-- end profile section -->

@endsection