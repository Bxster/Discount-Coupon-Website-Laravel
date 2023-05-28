@extends('layouts.public')

@section('title', 'FAQ')

@section('content')

<!-- about section -->

<section class="about_section layout_padding px-md-5 px-3">
  <div class="container">
    <div class="heading_container">
      <h2>
        FAQ
      </h2>
    </div>
  </div>

  <!--Section: FAQ-->
  <p class="text-center mb-5">
    Trova qui le risposte alle tue domande!
  </p>
  @Can('isAdmin')
  <div class="btn btn-success">
    <a href="{{ route('aggiunta_faq') }}" class='promotion-link'>
      Aggiungi domanda/risposta
    </a>
  </div>
  @endCan

  <div class="row">
    @foreach ($faqs as $faq)
    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i>
        {{ $faq->titolo}}
      </h6>
      <p>
        {{ $faq->corpo}}
      </p>
      @can('isAdmin')
      <a href=" {{ route('faq_update', ['faqId' => $faq->faqId]) }}">
        <button class="btn btn-success">
          Modifica
        </button>
      </a>
      <form action="{{ route('admin.faq.destroy', ['faqId' => $faq->faqId]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-success">Elimina</button>
      </form>
      @endcan
    </div>
    @endforeach
  </div>

</section>
<!--Section: FAQ-->
<!-- end about section -->
<div class="heading_container1">
  @include('pagination.paginator', ['paginator' => $faqs])
</div>


@endsection