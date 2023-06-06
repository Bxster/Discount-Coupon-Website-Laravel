@extends('layouts.public')

@section('title', 'Pagina Modifica')

@section('content')

<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link href="{{ asset('css/register.css')}}" rel="stylesheet" />

<div class="register-container">
    <div class="register-box">



        <div class="wrap-contact1">
            <h1>Pagina di Modifica Faq</h1>
            {{ Form::open(array('route' =>  ['faq_update_success','faqId' => $faq->faqId ], 'id' => 'updatefaq', 'class' => 'contact-form')) }}
            @csrf
            @method('PUT')
            <div class="wrap-input">
                {{ Form::label('titolo', 'Titolo', ['class' => 'label-input']) }}
                {{ Form::text('titolo', $faq->titolo, ['class' => 'input', 'id' => 'titolo']) }}
                @if ($errors->first('titolo'))
                <ul class="errors">
                    @foreach ($errors->get('titolo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="wrap-input">
                {{ Form::label('corpo', 'Corpo', ['class' => 'label-input']) }}
                {{ Form::textarea('corpo', $faq->corpo, ['class' => 'input', 'id' => 'corpo']) }}
                @if ($errors->first('corpo'))
                <ul class="errors">
                    @foreach ($errors->get('corpo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="button-box">

                <button class="btn cancel-btn" type="submit">Aggiorna</button>
                <button type="reset" class="btn cancel-btn"><a href="{{ route('faqs') }}">Annulla</a></button>

            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection