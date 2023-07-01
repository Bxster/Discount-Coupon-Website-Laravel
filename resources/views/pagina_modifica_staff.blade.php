@extends('layouts.public')

@section('title', 'Pagina Modifica Staff')

@section('content')

<link href="{{ asset('css/register.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />

<div class="register-container">
    <div class="register-box">
        <div class="wrap-contact1">
            <h1>Pagina di modifica profilo</h1>
            <form action="{{ route('staffpage_update',['userId' => $user->userId]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="wrap-input">
                    {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                    {{ Form::text('name', $user->name, ['class' => 'input', 'id' => 'name']) }}
                    @if ($errors->first('name'))
                    <ul class="errors">
                        @foreach ($errors->get('name') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="wrap-input">
                    {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
                    {{ Form::text('surname', $user->surname, ['class' => 'input', 'id' => 'surname']) }}
                    @if ($errors->first('surname'))
                    <ul class="errors">
                        @foreach ($errors->get('surname') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div>
                    <label>Nome Utente:</label>
                    {{$user->username}}
                </div>
                <div class="wrap-input">
                    {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                    {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                    @if ($errors->first('password'))
                    <ul class="errors">
                        @foreach ($errors->get('password') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>


                <!-- Bottoni -->
                <div class="button_box">
                    <button class="btn cancel-btn" type="submit">Aggiorna</button>
                    <button type="reset" class="btn cancel-btn"> <a href="{{ route('staffpage.show', ['userId' => $user->userId]) }}">Annulla</a></button>
                    <!-- errore per l'admin visto durante l'esame: per risolverlo sulla rotta spostare staffpage.show sotto -->
                </div>

            </form>
        </div>
    </div>
</div>
@endsection