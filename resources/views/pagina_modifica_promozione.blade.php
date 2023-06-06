@extends('layouts.public')

@section('title', 'Pagina Modifica')

@section('content')

<link href="{{ asset('css/register.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />

<div class="register-container">
    <div class="register-box">
        <div class="wrap-contact1">
            <h1>Pagina di modifica promozione</h1>
            <form action="{{ route('prompage_update',['promId' => $promozione->promId]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="wrap-input">
                    {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                    {{ Form::text('nome', $promozione->nome, ['class' => 'input', 'id' => 'name']) }}
                    @if ($errors->first('nome'))
                    <ul class="errors">
                        @foreach ($errors->get('nome') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="wrap-input">
                    {{ Form::label('oggetto', 'Oggetto', ['class' => 'label-input']) }}
                    {{ Form::text('oggetto', $promozione->oggetto, ['class' => 'input', 'id' => 'name']) }}
                    @if ($errors->first('oggetto'))
                    <ul class="errors">
                        @foreach ($errors->get('oggetto') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="wrap-input">
                    {{ Form::label('modalita', 'Modalità di fruizione', ['class' => 'label-input']) }}
                    {{ Form::text('modalita', $promozione->modalita, ['class' => 'input', 'id' => 'name']) }}
                    @if ($errors->first('modalita'))
                    <ul class="errors">
                        @foreach ($errors->get('modalita') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="wrap-input">
                    {{ Form::label('luoghi_fruizione', 'Luoghi di fruizione', ['class' => 'label-input']) }}
                    {{ Form::text('luoghi_fruizione', $promozione->luoghi_fruizione, ['class' => 'input', 'id' => 'name']) }}
                    @if ($errors->first('luoghi_fruizione'))
                    <ul class="errors">
                        @foreach ($errors->get('luoghi_fruzione') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="wrap-input">
                    {{ Form::label('tempi_fruizione', 'Tempi di fruizione', ['class' => 'label-input']) }}
                    {{ Form::date('tempi_fruizione', $promozione->tempi_fruizione, ['class' => 'input', 'id' => 'dataNascita']) }}
                    @if ($errors->first('tempi_fruizione'))
                    <ul class="errors">
                        @foreach ($errors->get('tempi_fruizione') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="button_box">
                    <button class="btn cancel-btn" type="submit">Aggiorna</button>
                    <button type="reset" class="btn cancel-btn"> <a href="{{ route('lista_promozioni') }}">Annulla</a></button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection