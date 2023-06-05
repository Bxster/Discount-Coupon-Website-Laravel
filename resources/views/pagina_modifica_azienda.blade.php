@extends('layouts.public')

@section('title', 'Pagina Modifica')

@section('content')

<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link href="{{ asset('css/register.css')}}" rel="stylesheet" />

<div class="register-container">
<div class="register-box">
    
<div class="wrap-contact1">
<h1>Pagina di modifica azienda</h1>
 {{ Form::open(array('route' => ['aziendapage_update','aziendeId' => $azienda->aziendeId ], 'id' => 'updateazienda', 'files' => true, 'class' => 'contact-form')) }}
    @csrf
    @method('PUT')
            <div  class="wrap-input">
                {{ Form::label('ragionesociale', 'Ragione Sociale', ['class' => 'label-input']) }}
                {{ Form::text('ragionesociale', $azienda->ragionesociale, ['class' => 'input', 'id' => 'ragionesociale']) }}
                @if ($errors->first('ragionesociale'))
                <ul class="errors">
                    @foreach ($errors->get('ragionesociale') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('tipologia', 'Tipologia', ['class' => 'label-input']) }}
                {{ Form::text('tipologia', $azienda->tipologia, ['class' => 'input', 'id' => 'tipologia']) }}
                @if ($errors->first('tipologia'))
                <ul class="errors">
                    @foreach ($errors->get('tipologia') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('desc', 'Descrizione', ['class' => 'label-input']) }}
                {{ Form::textarea('desc', $azienda->desc, ['class' => 'input', 'id' => 'desc']) }}
                @if ($errors->first('desc'))
                <ul class="errors">
                    @foreach ($errors->get('desc') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('citta', 'Città', ['class' => 'label-input']) }}
                {{ Form::text('citta', $azienda->citta, ['class' => 'input', 'id' => 'citta']) }}
                @if ($errors->first('citta'))
                <ul class="errors">
                    @foreach ($errors->get('citta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('via', 'Via', ['class' => 'label-input']) }}
                {{ Form::text('via', $azienda->via, ['class' => 'input', 'id' => 'via']) }}
                @if ($errors->first('via'))
                <ul class="errors">
                    @foreach ($errors->get('via') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('cap', 'Cap', ['class' => 'label-input']) }}
                {{ Form::text('cap', $azienda->cap, ['class' => 'input', 'id' => 'cap']) }}
                @if ($errors->first('cap'))
                <ul class="errors">
                    @foreach ($errors->get('cap') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('image', 'Logo', ['class' => 'label-input']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
                @if ($errors->first('image'))
                <ul class="errors">
                    @foreach ($errors->get('image') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

    <div class="button_box">
    <button class= "btn cancel-btn" type="submit">Aggiorna</button>
    <button type="reset" class="btn cancel-btn"> <a href="{{ route('lista_aziende') }}">Annulla</a></button>
    </div>
    {{ Form::close() }}
</div>

</div>
</div>
@endsection
