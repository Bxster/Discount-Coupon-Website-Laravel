@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
    <link href="{{ asset('css/register.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" />

    <div class="register-container">
        <div class="register-box">

            <div class="wrap-contact1">
                <h1>Pagina di registrazione</h1>
                {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}

                <div class="wrap-input">
                    {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                    {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
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
                    {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname']) }}
                    @if ($errors->first('surname'))
                        <ul class="errors">
                            @foreach ($errors->get('surname') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="wrap-input">
                    {{ Form::label('cellulare', 'Cellulare', ['class' => 'label-input']) }}
                    {{ Form::text('cellulare', '', ['class' => 'input', 'id' => 'cellulare']) }}
                    @if ($errors->first('cellulare'))
                        <ul class="errors">
                            @foreach ($errors->get('cellulare') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="wrap-input">
                    {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                    {{ Form::text('email', '', ['class' => 'input','id' => 'email', 'type'=>'email']) }}
                    @if ($errors->first('email'))
                        <ul class="errors">
                            @foreach ($errors->get('email') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="wrap-input">
                    {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                    {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                    @if ($errors->first('username'))
                        <ul class="errors">
                            @foreach ($errors->get('username') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
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

                <div class="wrap-input">
                    {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                    {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
                </div>

                <div class="wrap-input">
                    {{ Form::label('genere', 'Genere', ['class' => 'label-input']) }}
                    {{ Form::select('genere', ['0' => 'Maschio', '1' => 'Femmina'], null, ['class' => 'input', 'id' => 'genere']) }}
                    @if ($errors->first('genere'))
                        <ul class="errors">
                            @foreach ($errors->get('genere') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="wrap-input">
                    {{ Form::label('dataNascita', 'Data di Nascita', ['class' => 'label-input']) }}
                    {{ Form::date('dataNascita', null, ['class' => 'input', 'id' => 'dataNascita']) }}
                    @if ($errors->first('dataNascita'))
                        <ul class="errors">
                            @foreach ($errors->get('dataNascita') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="button-box">
                    {{ Form::submit('Registra', ['class' => 'btn register-btn']) }}
                    <button type="reset" class="btn cancel-btn"><a href="{{route('home')}}">Annulla</a></button>
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
