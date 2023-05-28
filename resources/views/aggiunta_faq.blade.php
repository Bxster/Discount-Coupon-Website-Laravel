@extends('layouts.public')

@section('title', 'Aggiunta Faq')

@section('content')

<div class="register-container">
    <h1>Pagina di Aggiunta Faq</h1>

    <div class="wrap-contact1">
        {!! Form::open(['route' => 'faq.store', 'enctype' => 'multipart/form-data']) !!}

        <div class="wrap-input">
            {!! Form::label('titolo', 'Titolo') !!}
            {!! Form::text('titolo', null, ['class' => 'form-control']) !!}
            @if ($errors->first('titolo'))
            <ul class="errors">
                @foreach ($errors->get('titolo') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif
        </div>

        <div class="wrap-input">
            {!! Form::label('corpo', 'Corpo') !!}
            {!! Form::text('corpo', null, ['class' => 'form-control']) !!}
            @if ($errors->first('corpo'))
            <ul class="errors">
                @foreach ($errors->get('corpo') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            <div class="buttons">
                <div class="container-form-btn col-4">
                    {{ Form::submit('Aggiungi', ['class' => 'form-btn1']) }}
                </div>

                <a href="{{ route('faqs') }}">
              <button class="btn btn-success" >
                Annulla
              </button>
</div>


            {{ Form::close() }}

        </div>

    </div>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/login.css')}}" rel="stylesheet" />


    @endsection