@extends('layouts.public')

@section('title', 'Aggiunta Staff')

@section('content')

<div class="register-container">
<h1>Pagina di Aggiunta Staff</h1>

     <div class="wrap-contact1">
     {!! Form::open(['route' => 'admin.staff.add', 'method' => 'post']) !!}

    <div class="wrap-input">
    {!! Form::label('name', 'Nome') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
        @if ($errors->first('name'))
        <ul class="errors">
            @foreach ($errors->get('name') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('surname', 'Cognome') !!}
    {!! Form::text('surname', null, ['class' => 'form-control', 'required']) !!}
        @if ($errors->first('surname'))
        <ul class="errors">
            @foreach ($errors->get('surname') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('cellulare', 'Cellulare') !!}
    {!! Form::text('cellulare', null, ['class' => 'form-control', 'required']) !!}
        @if ($errors->first('cellulare'))
        <ul class="errors">
            @foreach ($errors->get('cellulare') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
        @if ($errors->first('email'))
        <ul class="errors">
            @foreach ($errors->get('email') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('username', 'Username') !!}
    {!! Form::text('username', null, ['class' => 'form-control', 'required']) !!}
        @if ($errors->first('username'))
        <ul class="errors">
            @foreach ($errors->get('username') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="wrap-input">
    {!! Form::label('genere', 'Genere') !!}
    {!! Form::select('genere', ['0' => 'Maschio', '1' => 'Femmina'], null, ['class' => 'form-control', 'required']) !!}
        @if ($errors->first('genere'))
        <ul class="errors">
            @foreach ($errors->get('genere') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="wrap-input">
    {!! Form::label('dataNascita', 'Data di nascita') !!}
    {!! Form::date('dataNascita', null, ['class' => 'form-control', 'required']) !!}
        @if ($errors->first('dataNascita'))
        <ul class="errors">
            @foreach ($errors->get('dataNascita') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="buttons">
        <div class="container-form-btn col-4">
            {{ Form::submit('Aggiungi', ['class' => 'form-btn1']) }}
        </div>

        <button type="reset" class="btn cancel-btn" ><a href="{{ route('admin.elencoStaff') }}">Annulla</a></button>
    </div>


  {{ Form::close() }}

  </div>

</div>
<!-- Custom styles for this template -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />


@endsection
