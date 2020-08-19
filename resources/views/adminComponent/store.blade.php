<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LEYKER</title>

    <!-- Bootstrap core CSS -->
    <link type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link type="text/css" href="{{ asset('css/business-casual.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="{{ url('/home') }}">LYKER </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/home') }}">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/register') }}">Registro de
                            Ventas</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/products') }}">Productos</a>
                    </li>
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/store') }}">Tienda</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/products/add') }}">Agregar
                            Productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner text-center rounded">
                        <h2 class="section-heading mb-5">
                            <span class="section-heading-upper">Come On In</span>
                            <span class="section-heading-lower">We're Open</span>
                        </h2>
                        <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Sunday
                                <span class="ml-auto">Closed</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Monday
                                <span class="ml-auto">7:00 AM to 8:00 PM</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Tuesday
                                <span class="ml-auto">7:00 AM to 8:00 PM</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Wednesday
                                <span class="ml-auto">7:00 AM to 8:00 PM</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Thursday
                                <span class="ml-auto">7:00 AM to 8:00 PM</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Friday
                                <span class="ml-auto">7:00 AM to 8:00 PM</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Saturday
                                <span class="ml-auto">9:00 AM to 5:00 PM</span>
                            </li>
                        </ul>
                        <p class="address mb-5">
                            <em>
                                <strong>1116 Orchard Street</strong>
                                <br>
                                Golden Valley, Minnesota
                            </em>
                        </p>
                        <p class="mb-0">
                            <small>
                                <em>Call Anytime</em>
                            </small>
                            <br>
                            (317) 585-8468
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; Your Website 2018</p>
        </div>
        <!-- Footer Social Icons -->
        <div class="container">
            <h4 class="text-uppercase mb-4">Cuenta Oficial de Facebook</h4>
            
            <a href="https://www.facebook.com/LeykerPeru/" class="fa fa-facebook"></a>
            
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>

    <!-- Script to highlight the active date in the hours list -->
    <script>
        $('.list-hours li').eq(new Date().getDay()).addClass('today');

    </script>

</body>

</html>
