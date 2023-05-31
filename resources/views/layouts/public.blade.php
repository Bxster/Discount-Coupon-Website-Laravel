<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>CouponMania | @yield('title', 'CouponMania')</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css')}}" rel="stylesheet" />

  <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

</head>

<body>

<!-- header section strats -->

@include('layouts/navpublic')

<!-- end header section -->

  <!-- content section -->

  @yield('content')

  <!-- end content section -->

  <!-- footer section -->
  <footer>
    <section class="info_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="info_contact">
              <div class="info_logo">
                <a href="{{route ('home')}}">
                  <span>
                    CouponMania
                  </span>
                </a>
              </div>
              <h5>
                Inviaci una e-mail
              </h5>
              <div>
                <div class="img-box">
                  <img src="{{asset('images/envelope.png')}}" width="18px" alt="" />
                </div>
                <a href="mailto:demo@gmail.com" target="_blank">
                  <p>
                    demo@gmail.com
                  </p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-items-center justify-content-end">
            <div class="info_form ">
              <a href="{{ route('home') }}">
                <button class="btn btn-success">
                  Torna alla Homepage
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>
  <!-- footer section -->

@if(session('couponExists'))
    <div class="modal fade" id="couponExistsModal" tabindex="-1" role="dialog" aria-labelledby="couponExistsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="couponExistsModalLabel">Attenzione</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Hai già generato un coupon per questa promozione.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#couponExistsModal').modal('show');
        });
    </script>
@endif

@if(session('promScaduta'))
    <div class="modal fade" id="promScadutaModal" tabindex="-1" role="dialog" aria-labelledby="promScadutaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="promScadutaModalLabel">Attenzione</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    La promozione è scaduta, non puoi generare il coupon.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#promScadutaModal').modal('show');
        });
    </script>
@endif




</body>

</html>