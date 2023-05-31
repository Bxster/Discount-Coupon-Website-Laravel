@extends('layouts.public')

@section('title', 'Pagina Modifica')

@section('content')

<link href="{{ asset('css/login.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />

<div class="login-container">
<div class="static">
<h1>Pagina di modifica promozione</h1>

<form action="{{ route('prompage_update',['promId' => $promozione->promId]) }}" method="POST">
    @csrf
    @method('PUT')
<div>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="{{ $promozione->nome }}" required>
    @if ($errors->first('nome'))
                <ul class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
</div>
<div>
    <label for="oggetto">Oggetto:</label>
    <input type="text" id="oggetto" name="oggetto" value="{{ $promozione->oggetto }}" required>
    @if ($errors->first('oggetto'))
                <ul class="errors">
                    @foreach ($errors->get('oggetto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
</div>
    <div>
    <label for="modalita">Modalità di fruizione:</label>
    <input type="text" id="modalita" name="modalita" value="{{ $promozione->modalita }}" >
    @if ($errors->first('modalita'))
                <ul class="errors">
                    @foreach ($errors->get('modalita') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
</div>

    <div>
    <label for="luoghi_fruizione">Luogo di fruizione:</label>
    <input type="text" id="luoghi_fruizione" name="luoghi_fruizione" value="{{ $promozione->luoghi_fruizione}}" required>
    @if ($errors->first('luoghi_fruizione'))
                <ul class="errors">
                    @foreach ($errors->get('luoghi_fruzione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
</div>

    <div>
    <label for="tempi_fruizione">Tempi di fruizione:</label>
    <input type="date" select id="tempi_fruizione" name="tempi_fruizione" value="{{ $promozione->tempi_fruizione}}"required>
    @if ($errors->first('tempi_fruizione'))
                <ul class="errors">
                    @foreach ($errors->get('tempi_fruizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
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
