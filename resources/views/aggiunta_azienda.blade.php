@extends('layouts.public')

@section('title', 'Aggiunta Azienda')

@section('content')

<div class="register-container">
<h1>Pagina di Aggiunta Aziende</h1>

     <div class="wrap-contact1">
     {!! Form::open(['route' => 'aziende.store', 'enctype' => 'multipart/form-data']) !!}

    <div class="wrap-input">
    {!! Form::label('ragionesociale', 'Ragione Sociale') !!}
    {!! Form::text('ragionesociale', null, ['class' => 'form-control']) !!}
        @if ($errors->first('ragionesociale'))
        <ul class="errors">
            @foreach ($errors->get('ragionesociale') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('tipologia', 'Tipologia') !!}
    {!! Form::text('tipologia', null, ['class' => 'form-control']) !!}
        @if ($errors->first('tipologia'))
        <ul class="errors">
            @foreach ($errors->get('tipologia') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('desc', 'Descrizione') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
        @if ($errors->first('desc'))
        <ul class="errors">
            @foreach ($errors->get('desc') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('citta', 'Città') !!}
    {!! Form::text('citta', null, ['class' => 'form-control']) !!}
        @if ($errors->first('citta'))
        <ul class="errors">
            @foreach ($errors->get('citta') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('via', 'Via') !!}
    {!! Form::text('via', null, ['class' => 'form-control']) !!}
        @if ($errors->first('via'))
        <ul class="errors">
            @foreach ($errors->get('via') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('cap', 'CAP') !!}
    {!! Form::text('cap', null, ['class' => 'form-control']) !!}
        @if ($errors->first('cap'))
        <ul class="errors">
            @foreach ($errors->get('cap') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('image', 'Immagine') !!}
    {!! Form::file('image', ['class' => 'form-control-file']) !!}
        @if ($errors->first('image'))
        <ul class="errors">
            @foreach ($errors->get('image') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="buttons">
        <div class="container-form-btn col-4">
            {{ Form::submit('Aggiungi', ['class' => 'form-btn1']) }}
        </div>

        <div class="container-form-btn col-4">
            {{ Form::reset('Annulla', ['class' => 'form-btn1']) }}    
        </div>
    </div>


  {{ Form::close() }}

  </div>

</div>
<!-- Custom styles for this template -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />


@endsection

<!--
{!! Form::open(['route' => 'aziende.store', 'enctype' => 'multipart/form-data']) !!}

<div class="form-group">
    {!! Form::label('ragionesociale', 'Ragione Sociale') !!}
    {!! Form::text('ragionesociale', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tipologia', 'Tipologia') !!}
    {!! Form::text('tipologia', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('desc', 'Descrizione') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('citta', 'Città') !!}
    {!! Form::text('citta', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('via', 'Via') !!}
    {!! Form::text('via', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cap', 'CAP') !!}
    {!! Form::text('cap', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Immagine') !!}
    {!! Form::file('image', ['class' => 'form-control-file']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Aggiungi', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

-->
