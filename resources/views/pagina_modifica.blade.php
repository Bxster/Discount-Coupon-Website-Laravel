@extends('layouts.public')

@section('title', 'Pagina Modifica')

@section('content')

<link href="{{ asset('css/register.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />

<div class="register-container">
<div class="register-box">
 <div class="wrap-contact1">
<h1>Pagina di modifica profilo</h1>

<form action="{{ route('userpage_update',['userId' => $user->userId]) }}" method="POST">
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

@can('isUser','isAdmin')
<div class="wrap-input">
                    {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                    {{ Form::text('email', $user->email, ['class' => 'input','id' => 'email', 'type'=>'email']) }}
                    @if ($errors->first('email'))
                        <ul class="errors">
                            @foreach ($errors->get('email') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="wrap-input">
                    {{ Form::label('cellulare', 'Cellulare', ['class' => 'label-input']) }}
                    {{ Form::text('cellulare', $user->cellulare, ['class' => 'input', 'id' => 'cellulare']) }}
                    @if ($errors->first('cellulare'))
                        <ul class="errors">
                            @foreach ($errors->get('cellulare') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="wrap-input">
                    {{ Form::label('dataNascita', 'Data di Nascita', ['class' => 'label-input']) }}
                    {{ Form::date('dataNascita', $user->dataNascita, ['class' => 'input', 'id' => 'dataNascita']) }}
                    @if ($errors->first('dataNascita'))
                        <ul class="errors">
                            @foreach ($errors->get('dataNascita') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="wrap-input">
                    {{ Form::label('genere', 'Genere', ['class' => 'label-input']) }}
                    {{ Form::select('genere', ['0' => 'Maschio', '1' => 'Femmina'], $user->genere, ['class' => 'input', 'id' => 'genere']) }}
                    @if ($errors->first('genere'))
                        <ul class="errors">
                            @foreach ($errors->get('genere') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
@endcan

    <!-- Altri campi per i dati personali -->
    <div class="button_box">
    <button class= "btn cancel-btn" type="submit">Aggiorna</button>

    @can('isUser')
    <button type="reset" class="btn cancel-btn"> <a href="{{ route('userpage.show', ['userId' => $user->userId]) }}">Annulla</a></button>
    @endcan
    @can('isStaff')
    <button type="reset" class="btn cancel-btn"> <a href="{{ route('staffpage.show', ['userId' => $user->userId]) }}">Annulla</a></button>
    @endcan
    @can('isAdmin')
    <button type="reset" class="btn cancel-btn"> <a href="{{ route('staffpage.show', ['userId' => $user->userId]) }}">Annulla</a></button>
    @endcan
</div>

</form>
</div>
</div>
</div>
@endsection
