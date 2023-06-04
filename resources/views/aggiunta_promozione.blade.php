@extends('layouts.public')

@section('title', 'Aggiunta Promozione')

@section('content')

<!-- Custom styles for this template -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link href="{{ asset('css/register.css')}}" rel="stylesheet" />
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />

<div class="register-container">
<div class="register-box">


     <div class="wrap-contact1">
     <h1>Pagina di Aggiunta Promozione</h1>
     <form action="{{ route('promozione.store',['aziendeId' => $azienda->aziendeId]) }}" method="POST">
    @csrf


    <div class="wrap-input">
    {!! Form::label('nome', 'Nome Promozione') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        @if ($errors->first('nome'))
        <ul class="errors">
            @foreach ($errors->get('nome') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('oggetto', 'Breve drescizione') !!}
    {!! Form::text('oggetto', null, ['class' => 'form-control']) !!}
        @if ($errors->first('oggetto'))
        <ul class="errors">
            @foreach ($errors->get('oggetto') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('modalita', 'Modalità di fruizione') !!}
    {!! Form::textarea('modalita', null, ['class' => 'form-control']) !!}
        @if ($errors->first('modalita'))
        <ul class="errors">
            @foreach ($errors->get('modalita') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('luoghi_fruizione', 'Luoghi di fruizione') !!}
    {!! Form::text('luoghi_fruizione', null, ['class' => 'form-control']) !!}
        @if ($errors->first('luoghi_fruizione'))
        <ul class="errors">
            @foreach ($errors->get('luoghi_fruizione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('tempi_fruizione', 'Tempi di fruizione') !!}
    {!! Form::date('tempi_fruizione', null, ['class' => 'form-control']) !!}
    @if ($errors->first('tempi_fruizione'))
        <ul class="errors">
            @foreach ($errors->get('tempi_fruizione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

    </div>



    <div class="button-box">
    {{ Form::submit('Aggiungi', ['class' => 'bnt submit-btn']) }}

    <button type="reset" class="btn cancel-btn" ><a href="{{ route('lista_aziende') }}">Annulla</a></button>
    </div>


</form>

  </div>
</div>

</div>
@endsection

