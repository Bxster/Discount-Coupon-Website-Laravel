@extends('layouts.public')

@section('title', 'Pagina Promozione')

@section('content')


<!--
<h1>{{ $promozione->nome }}</h1>
<p><strong>Oggetto:</strong> {{ $promozione->oggetto }}</p>
<p><strong>Modalità:</strong> {{ $promozione->modalita }}</p>
<p><strong>Azienda:</strong> {{ $promozione->promAz->ragionesociale}} </p>
<p><strong>Tempi di fruizione:</strong> {{ $promozione->tempi_fruizione }}</p>
<p><strong>Luoghi di fruizione:</strong> {{ $promozione->luoghi_fruizione }}</p>
<p><strong>Codice promozione:</strong> {{ $promozione->codice_promozione }}</p>
-->

<!-- about section -->

<section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
        {{ $promozione->nome }}
        </h2>
      </div>
      <div class="box">
        <div class="img_aziende">
          <img src="images/auto-img.png" alt="">
        </div>
        <div class="detail-box">
            <h3>
                Nome Azienda
            </h3>
          <p>
          {{ $promozione->promAz->ragionesociale}}
          </p>
        <div class="img_aziende">
         <img src="{{ $promozione->promAz->image }}" alt="{{ $promozione->promAz->nome }}">
       </div>
        </div>
        <div class="detail-box">
          <p>
          {{ $promozione->oggetto }}
          </p>
        </div>
        <div class="box">
        <div class="img_aziende">
            <img src="images/auto-img.png" alt="">
        <div class="detail-box">
            <h3>
                Dettagli promozione
            </h3>
          <p>
          {{ $promozione->modalita }}
          </p>
          <p>
          Tempi di fruizione: {{ $promozione->tempi_fruizione }}
          </p>
          <p>
          Luoghi di fruizione: {{ $promozione->luoghi_fruizione }}
          </p>
          <p>
          Codice promozione: {{ $promozione->codice_promozione }}
          </p>
            <a href=" ">
                <button class="btn btn-success">
                  Ottieni
                </button>
            </a>
         </div>   
        </div>
    
    </div>

</section>
<!-- end about section -->


@endsection
