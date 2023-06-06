@extends('layouts.public')

@section('title', 'Pagina Coupon')

@section('content')

<div class="container mt-5 mb-5">
  <h2 class="text-center">{{ $coupon->coupPr->nome }}</h2>
  <div class="black-rectangle">
    <div class="row">
      <div class="col-lg-4">
        <div class="company_logo">
          @include('helpers/productImg', ['attrs' => 'imagefrm', 'imgFile' => $coupon->coupPr->promAz->image])
          <h4>{{ $coupon->coupPr->promAz->nome }}</h4>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="coupon-details">
          <div class="coupon-header">
            <h4>Grazie, {{ $coupon->coupUs->name }} {{ $coupon->coupUs->surname }}!</h4>
            <p>Il tuo coupon è pronto per essere utilizzato:</p>
          </div>
          <div class="coupon-code">
            <h1>{{ $coupon->codice }}</h1>
          </div>
          <div class="coupon-info">
            <h4>Descrizione della promozione:</h4>
            <p>{{ $coupon->coupPr->oggetto }}</p>
          </div>
          <div class="coupon-info">
            <h4>Dettagli di utilizzo:</h4>
            <p>{{ $coupon->coupPr->modalita }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection