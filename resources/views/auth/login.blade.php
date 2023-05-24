
@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />


<div class="login-container">
<div class="static">
    <h3>Login</h3>
    <p>Utilizza questa form per autenticarti al sito</p>

    <div class="container-contact">
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'login', 'class' => 'contact-form')) }}
            
             <div  class="wrap-input">
                 <p> Se non hai già un account <button class="btn register-btn"><a  href="{{ route('register') }}">Registrati</a></button></p>
             </div>            
             <div  class="wrap-input">
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
            
             <div  class="wrap-input">
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
               {{ Form::submit('Login', ['class' => 'btn submit-btn']) }}
			   <button type="reset" class="btn cancel-btn"> <a href="{{route('home')}}">Annulla</a></button>
            </div>
            {{ Form::close() }}
        </div>
    </div>

</div>
</div>
@endsection

