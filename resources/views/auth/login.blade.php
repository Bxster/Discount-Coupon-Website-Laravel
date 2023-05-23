@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<!-- Custom styles for this template -->
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />


<div class="login-container">
	<div class="login-box">
		<h2>Pagina di Login</h2>
		{{ Form::open(array('route' => 'login')) }}
			<div class="user-box">
				{{ Form::label('username', 'Username',['class' => 'user-box']) }}
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
				<!--<input type="password" name="" required="">-->
				<label>{{ Form::label('password', 'Password',['class' => 'user-box']) }}</label>
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
				<button type="reset" class="btn register-btn"> <a href="{{route('register')}}"> Registrati </a> </button>
				<button type="submit" class="btn submit-btn">{{ Form::submit('Login') }}</button>
			</div>
            <button type="reset" class="btn cancel-btn"> <a href="{{route('home')}}">Annulla</a></button>
            {{ Form::close() }}
	</div>
</div>



@endsection
