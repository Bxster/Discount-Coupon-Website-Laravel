<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{ route('user') }}">
                <span>
                    CouponMania
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('who') }}"> Chi siamo </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faqs') }}"> FAQ </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pagina_staff.html"> {{Auth::user()->username}}</a> <!--cambiare link-->
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>