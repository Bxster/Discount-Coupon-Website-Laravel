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

<div class="register-container">

    <h3>Pagina di Aggiunta Faq</h3>

    <div class="container-contact">
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'faq.store', 'id' => 'addfaq', 'class' => 'contact-form')) }}
            <div  class="wrap-input">
                {{ Form::label('titolo', 'Titolo', ['class' => 'label-input']) }}
                {{ Form::text('titolo', '', ['class' => 'input', 'id' => 'titolo']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('corpo', 'Corpo', ['class' => 'label-input']) }}
                {{ Form::textarea('corpo', '', ['class' => 'input', 'id' => 'corpo']) }}
            </div>

            <div class="buttons">
            <div class="container-form-btn col-4">
                {{ Form::submit('Aggiungi Faq', ['class' => 'form-btn1']) }}
            </div>
            <button type="reset" class="btn cancel-btn" ><a href="{{ route('faqs') }}">Annulla</a></button>
            </div>

            {{ Form::close() }}
        </div>
    </div>

</div>

@endsection

<!-- Custom styles for this template -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />

