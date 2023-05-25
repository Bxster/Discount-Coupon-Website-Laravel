@extends('layouts.public')

@section('title', 'Pagina Promozione')

@section('content')


<h1>{{ $promozione->nome }}</h1>
<p><strong>Oggetto:</strong> {{ $promozione->oggetto }}</p>
<p><strong>Modalità:</strong> {{ $promozione->modalita }}</p>
<p><strong>Azienda:</strong> {{ $promozione->promAz->ragionesociale}} </p>
<p><strong>Tempi di fruizione:</strong> {{ $promozione->tempi_fruizione }}</p>
<p><strong>Luoghi di fruizione:</strong> {{ $promozione->luoghi_fruizione }}</p>
<p><strong>Codice promozione:</strong> {{ $promozione->codice_promozione }}</p>


@endsection
