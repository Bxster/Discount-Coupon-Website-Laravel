@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<!-- Custom styles for this template -->
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />


    <div class="login-container">
	<div class="login-box">
		<h2>Pagina di Login</h2>
		<form>
			<div class="user-box">
				<input type="text" name="" required="">
				<label>Username</label>
			</div>
			<div class="user-box">
				<input type="password" name="" required="">
				<label>Password</label>
			</div>
			<div class="button-box">
				<button type="reset" class="btn register-btn"> <a href="{{route('register')}}"> Registrati </a> </button>
				<button type="submit" class="btn submit-btn">Accedi</button>
			</div>
            <button type="reset" class="btn cancel-btn" onclick="{{route('home')}}">Annulla</button>
		</form>
	</div>
</div>



@endsection
