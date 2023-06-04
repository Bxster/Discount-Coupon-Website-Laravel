@extends('layouts.public')

@section('title', 'Aggiunta Aggiunta Faq')

@section('scripts')

@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(function () {
    var actionUrl = "{{ route('faq.store') }}";
    var formId = 'addfaq';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addfaq").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection


@section('content')
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link href="{{ asset('css/register.css')}}" rel="stylesheet" />
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />

<div class="register-container">
<div class="register-box">


    <div class="wrap-contact1">
    <h1>Pagina di Aggiunta Faq</h1>
        {!! Form::open(['route' => 'faq.store', 'enctype' => 'multipart/form-data']) !!}

    <div class="container-contact">
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'faq.store', 'id' => 'addfaq', 'class' => 'contact-form')) }}
            <div  class="wrap-input">
                {{ Form::label('titolo', 'Titolo', ['class' => 'label-input']) }}
                {{ Form::text('titolo', '', ['class' => 'input', 'id' => 'titolo']) }}
            </div>

        <div class="wrap-input">
            {!! Form::label('corpo', 'Corpo') !!}
            {!! Form::textarea('corpo', null, ['class' => 'form-control']) !!}
            @if ($errors->first('corpo'))
            <ul class="errors">
                @foreach ($errors->get('corpo') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif
</div>

            <div class="button-box">
                    {{ Form::submit('Aggiungi', ['class' => 'btn submit-btn']) }}
                    <button type="reset" class="btn cancel-btn" ><a href="{{ route('faqs') }}">Annulla</a></button>
                </div>
                {{ Form::close() }}

            {{ Form::close() }}
        </div>
    </div>

            
</div>

@endsection


        </div>

    </div>
    @endsection

