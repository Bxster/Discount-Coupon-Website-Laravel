@extends('layouts.public')

@section('title', 'Pagina Modifica')

@section('scripts')

@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(function () {
    var actionUrl = "{{ route('faq_update_success',['faqId' => $faq->faqId]) }}";
    var formId = 'updatefaq';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#updatefaq").on('submit', function (event) {
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
        <h1>Pagina di Modifica Faq</h1>
            {{ Form::open(array('route' =>  ['faq_update_success','faqId' => $faq->faqId ], 'id' => 'updatefaq', 'class' => 'contact-form')) }}
            @csrf
    @method('PUT')
            <div  class="wrap-input">
                {{ Form::label('titolo', 'Titolo', ['class' => 'label-input']) }}
                {{ Form::text('titolo', $faq->titolo, ['class' => 'input', 'id' => 'titolo']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('corpo', 'Corpo', ['class' => 'label-input']) }}
                {{ Form::textarea('corpo', $faq->corpo, ['class' => 'input', 'id' => 'corpo']) }}
            </div>

                <div class="button-box">

                <button class= "btn cancel-btn" type="submit">Aggiorna</button>
                        <button type="reset"class="btn cancel-btn" ><a href="{{ route('faqs') }}">Annulla</a></button>

                </div>

                {{ Form::close() }}

</div>

    </div>
</div>
@endsection
