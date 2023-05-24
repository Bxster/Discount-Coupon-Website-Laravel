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

  <div class="row">
    @foreach ($faqs as $faq)
      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i>
          {{ $faq->titolo}}
        </h6>
        <p>
          {{ $faq->corpo}}
        </p>
      </div>
    @endforeach
  </div>

</section>
<!--Section: FAQ-->
  <!-- end about section -->

@endsection