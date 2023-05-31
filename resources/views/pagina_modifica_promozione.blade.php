@extends('layouts.public')

@section('title', 'Pagina Modifica')

@section('content')

<link href="{{ asset('css/login.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />

<div class="login-container">
<div class="static">
<h1>Pagina di modifica profilo</h1>

<form action="{{ route('prompage_update',['promId' => $promozione->promId]) }}" method="POST">
    @csrf
    @method('PUT')
<div>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="{{ $promozione->nome }}" required>
</div>
<div>
    <label for="oggetto">Oggetto:</label>
    <input type="text" id="oggetto" name="oggetto" value="{{ $promozione->oggetto }}" required>
</div>
    <div>
    <label for="modalita">Modalità di fruizione:</label>
    <input type="text" id="modalita" name="modalita" value="{{ $promozione->modalita }}" >
</div>

    <div>
    <label for="luoghi_fruizione">Luogo di fruizione:</label>
    <input type="text" id="luoghi_fruizione" name="luoghi_fruizione" value="{{ $promozione->luoghi_fruizione}}" required>
</div>

    <div>
    <label for="tempi_fruizione">Tempi di fruizione:</label>
    <input type="date" select id="tempi_fruizione" name="tempi_fruizione" value="{{ $promozione->tempi_fruizione}}"required>
</div>

    <!-- Altri campi per i dati personali -->
    <div class="button_box">
    <button class= "btn cancel-btn" type="submit">Aggiorna</button>

    <button type="reset" class="btn cancel-btn"> <a href="{{ route('lista_promozioni') }}">Annulla</a></button>

</div>
</form>
</div>
</div>
@endsection
