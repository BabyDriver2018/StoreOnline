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
    <!-- Modal Message Init-->
    @if (!empty($message_of_prod_stock))
        <div class="modal fade in" id="myModal" role="dialog" style="display: block; padding-right: 17px;">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header"><button class="close" data-dismiss="modal" type="button"></button>
                        <h4 class="modal-title">NOVEDADES</h4>
                    </div>

                    <div class="modal-body">{{ $message_of_prod_stock }}
                    </div>

                    <div class="modal-footer"><button class="btn btn-default" data-dismiss="modal"
                            type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            $(function() {
                $("#myModal").modal();
            });

        </script>
    @endif


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none"
                href="{{ url('/home') }}">LEYKER </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/index') }}">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/registervent') }}">Registro de
                            Ventas</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/products') }}">Productos</a>
                    </li>
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/store') }}">Tienda</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/addproducts') }}">Agregar
                            Productos</a>
                    </li>
                    <a class="nav-item px-lg-4" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
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
                            <span class="section-heading-upper">ADELANTE</span>
                            <span class="section-heading-lower">ESTAMOS ATENTOS A SU PEDIDO!</span>
                        </h2>
                        <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Domingo
                                <span class="ml-auto">Cerrado</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Lunes
                                <span class="ml-auto">8:00 AM - 8:00 PM</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Martes
                                <span class="ml-auto">8:00 AM - 8:00 PM</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Miercoles
                                <span class="ml-auto">8:00 AM - 8:00 PM</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Jueves
                                <span class="ml-auto">8:00 AM - 8:00 PM</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Viernes
                                <span class="ml-auto">8:00 AM - 8:00 PM</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Sabado
                                <span class="ml-auto">8:00 AM - 5:00 PM</span>
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
                                <em>Llama en Cualquier momento</em>
                            </small>
                            <br>

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
            <a href="https://www.facebook.com/LeykerPeru/">
                <h4 class="text-uppercase mb-4">Cuenta Oficial de Facebook</h4>
            </a>

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
