@extends('layouts.public')

@section('title', 'Pagina Modifica')

@section('content')

<div class="register-container">
    <h1>Pagina di Modifica Faq</h1>

    <div class="wrap-contact1">
        <form action="{{ route('faq_update_success',['faqId' => $faq->faqId]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="wrap-input">
                {!! Form::label('titolo', 'Titolo') !!}
                {!! Form::text('titolo', $faq->titolo, ['class' => 'form-control']) !!}
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
                {!! Form::text('corpo', $faq->corpo, ['class' => 'form-control']) !!}
                @if ($errors->first('corpo'))
                <ul class="errors">
                    @foreach ($errors->get('corpo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

                <div class="buttons">
                    <div class="container-form-btn col-4">
                        {{ Form::submit('Modifica', ['class' => 'form-btn1']) }}
                    </div>

                    <a href="{{ route('faqs') }}">
              <button class="btn btn-success" >
                Annulla
              </button>
</div>

        </form>

    </div>
    @endsection
</div>
<!-- Custom styles for this template -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />