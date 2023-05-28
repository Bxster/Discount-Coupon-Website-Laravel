@extends('layouts.public')

@section('title', 'Pagina Profilo')

@section('content')


<!-- about section -->

<section class="about_section layout_padding">
   <div class="container">
     <div class="heading_container">
       <h2>
         {{ $azienda->ragionesociale }}
       </h2>
     </div>
     <div class="box">
       <div class="img_aziende">
         <img src="{{ $azienda->image }}" alt="{{ $azienda->nome }}">
       </div>
       <div class="detail-box">
         <p>
           {{ $azienda->desc }}
         </p>
         <p><strong>Tipologia:</strong> {{ $azienda->tipologia }}</p>
         <p><strong>Città:</strong> {{ $azienda->citta }}</p>
         <p><strong>Via:</strong> {{ $azienda->via }}</p>
         <p><strong>CAP:</strong> {{ $azienda->cap }}</p>
         @can('isAdmin')           
            <a href=" ">
              <button class="btn btn-success">
                Modifica
              </button>
            </a>
            <form action="{{ route('admin.aziende.destroy', ['aziendeId' => $azienda->aziendeId]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-success">Elimina</button>
            </form>
           <!-- <a href=" ">
              <button class="btn btn-success">
                Elimina
              </button>
            </a> -->
          @endcan
       </div>
     </div>
   </div>
 </section>

 <!--
 <p><strong>Ragione Sociale:</strong> {{ $azienda->ragionesociale }}</p>
<p><strong>Tipologia:</strong> {{ $azienda->tipologia }}</p>
<p><strong>Descrizione:</strong> {{ $azienda->desc }}</p>
<p><strong>Città:</strong> {{ $azienda->citta }}</p>
<p><strong>Via:</strong> {{ $azienda->via }}</p>
<p><strong>CAP:</strong> {{ $azienda->cap }}</p> -->

 <!-- end about section -->


@endsection