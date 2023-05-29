@extends('layouts.public')

@section('title', 'Pagina Modifica')

@section('content')

<link href="{{ asset('css/login.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />

<div class="login-container">
<div class="static">
<h1>Pagina di modifica profilo</h1>

<form action="{{ route('aziendapage_update',['aziendeId' => $azienda->aziendeId]) }}" method="POST">
    @csrf
    @method('PUT')
<div>
    <label for="ragionesociale">Nome:</label>
    <input type="text" id="ragionesociale" name="ragionesociale" value="{{ $azienda->ragionesociale }}" required>
</div>
<div>
    <label for="tipologia">Tipologia:</label>
    <input type="text" id="tipologia" name="tipologia" value="{{ $azienda->tipologia }}" required>
</div>
<div>
    <label for="desc">Descrizione:</label>
    <input type="text" id="desc" name="desc" value="{{ $azienda->desc }}" required>
</div>
    <div>
    <label for="citta">Città:</label>
    <input type="text" id="citta" name="citta" value="{{$azienda->citta}}"required >
</div>

<div>
    <label for="via">Via:</label>
    <input type="text" id="via" name="via" value="{{$azienda->via}}"required >
</div>
    <div>
    <label for="cap">Cap:</label>
    <input type="text" id="cap" name="cap" value="{{ $azienda->cap}}" required>
</div>
<div>
    <label for="image">Immagine:</label>
    <input type="file" id="image" name="image" value="{{ $azienda->image}}" >
</div>

    <!-- Altri campi per i dati personali -->
    <div class="button_box">
    <button class= "btn cancel-btn" type="submit">Aggiorna</button>

    <button type="reset" class="btn cancel-btn"> <a href="{{ route('aziendapage_update', ['aziendeId' => $azienda->aziendeId]) }}">Annulla</a></button>

</div>
</form>
</div>
</div>
@endsection
