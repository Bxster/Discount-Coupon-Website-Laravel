@extends('layouts.public')

@section('title', 'Pagina Modifica')
@section('scripts')

@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(function () {
    var actionUrl = "{{ route('aziendapage_update',['aziendeId' => $azienda->aziendeId]) }}";
    var formId = 'updateazienda';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#updateazienda").on('submit', function (event) {
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
<h1>Pagina di modifica azienda</h1>
 {{ Form::open(array('route' => ['aziendapage_update','aziendeId' => $azienda->aziendeId ], 'id' => 'updateazienda', 'files' => true, 'class' => 'contact-form')) }}
    @csrf
    @method('PUT')
            <div  class="wrap-input">
                {{ Form::label('ragionesociale', 'Ragione Sociale', ['class' => 'label-input']) }}
                {{ Form::text('ragionesociale', $azienda->ragionesociale, ['class' => 'input', 'id' => 'ragionesociale']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('tipologia', 'Tipologia', ['class' => 'label-input']) }}
                {{ Form::text('tipologia', $azienda->tipologia, ['class' => 'input', 'id' => 'tipologia']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('desc', 'Descrizione', ['class' => 'label-input']) }}
                {{ Form::textarea('desc', $azienda->desc, ['class' => 'input', 'id' => 'desc']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('citta', 'Città', ['class' => 'label-input']) }}
                {{ Form::text('citta', $azienda->citta, ['class' => 'input', 'id' => 'citta']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('via', 'Via', ['class' => 'label-input']) }}
                {{ Form::text('via', $azienda->via, ['class' => 'input', 'id' => 'via']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('cap', 'Cap', ['class' => 'label-input']) }}
                {{ Form::text('cap', $azienda->cap, ['class' => 'input', 'id' => 'cap']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('image', 'Logo', ['class' => 'label-input']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
            </div>
    <div class="button_box">
    <button class= "btn cancel-btn" type="submit">Aggiorna</button>
    <button type="reset" class="btn cancel-btn"> <a href="{{ route('lista_aziende') }}">Annulla</a></button>
    </div>
    {{ Form::close() }}
</div>

</div>
</div>
@endsection
