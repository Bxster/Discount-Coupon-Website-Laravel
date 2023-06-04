@extends('layouts.public')

@section('title', 'Pagina Modifica')

@section('content')

<link href="{{ asset('css/login.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link href="{{ asset('css/register.css')}}" rel="stylesheet" />

<div class="register-container">
<div class="register-box">
    
<div class="wrap-contact1">
<h1>Pagina di modifica azienda</h1>

<form action="{{ route('aziendapage_update',['aziendeId' => $azienda->aziendeId]) }}" method="POST">
    @csrf
    @method('PUT')
<div>
    <label for="ragionesociale">Nome:</label>
    <input type="text" id="ragionesociale" name="ragionesociale" value="{{ $azienda->ragionesociale }}" required>
    @if ($errors->first('ragionesociale'))
                <ul class="errors">
                    @foreach ($errors->get('ragionesociale') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
</div>
<div>
    <label for="tipologia">Tipologia:</label>
    <input type="text" id="tipologia" name="tipologia" value="{{ $azienda->tipologia }}" required>
    @if ($errors->first('tipologia'))
                <ul class="errors">
                    @foreach ($errors->get('tipologia') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
</div>
<div>
    <label for="desc">Descrizione:</label>
    <input type="text" id="desc" name="desc" value="{{ $azienda->desc }}" required>
    @if ($errors->first('desc'))
                <ul class="errors">
                    @foreach ($errors->get('desc') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
</div>
    <div>
    <label for="citta">Città:</label>
    <input type="text" id="citta" name="citta" value="{{$azienda->citta}}"required >
    @if ($errors->first('citta'))
                <ul class="errors">
                    @foreach ($errors->get('citta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
</div>

<div>
    <label for="via">Via:</label>
    <input type="text" id="via" name="via" value="{{$azienda->via}}"required >
    @if ($errors->first('via'))
                <ul class="errors">
                    @foreach ($errors->get('via') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
</div>
    <div>
    <label for="cap">Cap:</label>
    <input type="text" id="cap" name="cap" value="{{ $azienda->cap}}" required>
    @if ($errors->first('cap'))
                <ul class="errors">
                    @foreach ($errors->get('cap') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
</div>
<div>
    <label for="image">Immagine:</label>
    <input type="file" id="image" name="image" value="{{ $azienda->image}}" >
</div>

    <!-- Altri campi per i dati personali -->
    <div class="button_box">
    <button class= "btn cancel-btn" type="submit">Aggiorna</button>
    <button type="reset" class="btn cancel-btn"> <a href="{{ route('lista_aziende') }}">Annulla</a></button>
    </div>
</form>
</div>

</div>
</div>
@endsection
