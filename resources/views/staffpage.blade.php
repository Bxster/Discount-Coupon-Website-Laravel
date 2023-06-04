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
            <div class="col-md-6">
                <div class="mb-3">

                    <div class = "button-box">
                  <a href="{{ route('pagina_modifica', ['userId' => $user->userId]) }}">
                  <button type="button" class="btn btn-success">Modifica</button>
                  </a>
                  @can('isAdmin')
                  <form action="{{ route('admin.user.destroy', ['userId' => $user->userId]) }}" method="POST" class="confirm-delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-success delete-button" data-confirm="Sei sicuro di voler eliminare lo staff?">Elimina</button>
                  </form>
</div>
                  @endcan                

                </div>
            </div>
            </div> 
        </div>
    </div>
</div>
</section>

@endsection