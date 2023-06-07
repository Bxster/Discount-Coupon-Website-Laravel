@extends('layouts.public')

@section('title', 'Aggiunta Azienda')

@section('scripts')

@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(function () {
    var actionUrl = "{{ route('aziende.store') }}";
    var formId = 'addazienda';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addazienda").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection



@section('content')
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link href="{{ asset('css/register.css')}}" rel="stylesheet" />

<div class="register-container">
    <div class="register-box">
        <div class="wrap-contact1">
            <h1>Aggiungi Azienda</h1>
            {{ Form::open(array('route' => 'aziende.store', 'id' => 'addazienda', 'files' => true, 'class' => 'contact-form')) }}
            <div  class="wrap-input">
                {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('tipologia', 'Tipologia', ['class' => 'label-input']) }}
                {{ Form::text('tipologia', '', ['class' => 'input', 'id' => 'tipologia']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('desc', 'Descrizione', ['class' => 'label-input']) }}
                {{ Form::text('desc', '', ['class' => 'input', 'id' => 'desc']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('citta', 'Città', ['class' => 'label-input']) }}
                {{ Form::text('citta', '', ['class' => 'input', 'id' => 'citta']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('via', 'Via', ['class' => 'label-input']) }}
                {{ Form::text('via', '', ['class' => 'input', 'id' => 'via']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('cap', 'Cap', ['class' => 'label-input']) }}
                {{ Form::text('cap', '', ['class' => 'input', 'id' => 'cap']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('image', 'Logo', ['class' => 'label-input']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
            </div>

            <div class="button-box">
                {{ Form::submit('Aggiungi', ['class' => 'btn register-btn']) }}

               <button type="reset" class="btn cancel-btn" ><a href="{{ route('lista_aziende') }}">Annulla</a></button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection
