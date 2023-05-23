@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<!-- Custom styles for this template -->
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />

<div class="login-box">
    <h3>Pagina di Login</h3>     
             <div class="user-box">
             {{ Form::open(array('route' => 'login',)) }}   
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
            
            <div class="user-box">
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
            
			<div class="button-box">
                
            <button type="reset" class="btn register-btn"><a  href="{{ route('register') }}">Registrati</a></p></button>
            <button type="submit" class="btn submit-btn">{{ Form::submit('Login') }}</button>
            </div>

            <button type="reset" class="btn cancel-btn"> <a href="{{route('home')}}">Annulla</a></button>
            
            {{ Form::close() }}

</div>
@endsection
