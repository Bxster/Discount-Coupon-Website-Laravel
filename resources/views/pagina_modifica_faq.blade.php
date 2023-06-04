@extends('layouts.public')

@section('title', 'Pagina Modifica')

@section('content')
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link href="{{ asset('css/register.css')}}" rel="stylesheet" />

<div class="register-container">
<div class="register-box">


    <div class="wrap-contact1">
    <h1>Pagina di Modifica Faq</h1>
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
                {!! Form::textarea('corpo', $faq->corpo, ['class' => 'form-control']) !!}
                @if ($errors->first('corpo'))
                <ul class="errors">
                    @foreach ($errors->get('corpo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
</div>

                <div class="button-box">

                        {{ Form::submit('Modifica', ['class' => 'btn submit-btn']) }}
                        <button type="reset"class="btn cancel-btn" ><a href="{{ route('faqs') }}">Annulla</a></button>

                </div>

        </form>

</div>

    </div>
</div>
@endsection
