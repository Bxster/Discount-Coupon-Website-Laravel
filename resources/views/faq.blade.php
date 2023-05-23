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
    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> A simple
        question?</h6>
      <p>
        Absolutely! We work with top payment companies which guarantees
        your safety and security. All billing information is stored on our payment processing partner.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-pen-alt text-primary pe-2"></i> A question
        that
        is longer then the previous one?</h6>
      <p>
        Yes, it is possible! You can cancel your subscription anytime in your account. Once the 
        subscription is cancelled, you will not be charged next month.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-user text-primary pe-2"></i> A simple
        question?
      </h6>
      <p>
        Currently, we only offer monthly subscription. You can upgrade or cancel your monthly
        account at any time with no further obligation.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-rocket text-primary pe-2"></i> A simple
        question?
      </h6>
      <p>
        Yes. Go to the billing section of your dashboard and update your payment information.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-home text-primary pe-2"></i> A simple
        question?
      </h6>
      Unfortunately no! We do not issue full or partial refunds for any reason.
    </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-book-open text-primary pe-2"></i> Another
        question that is longer than usual</h6>
      <p>
        Of course! We’re happy to offer a free plan to anyone who wants to try our service.
      </p>
    </div>
  </div>
</section>
<!--Section: FAQ-->
  <!-- end about section -->

@endsection