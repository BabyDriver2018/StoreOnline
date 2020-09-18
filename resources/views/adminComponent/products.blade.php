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
    {{-- Fuente de Font Awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                href="{{ url('/home') }}">LYKER</a>
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
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/registerVent') }}">Registro
                            de
                            Ventas</a>
                    </li>
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/products') }}">Productos</a>
                    </li>
                    <li class="nav-item px-lg-4">
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
    @if (!empty($allprod)){
        
            <section class="page-section cta">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 mx-auto">
                            <div class="cta-inner text-center rounded">
                                <h2 class="section-heading mb-7">
                                    <span class="section-heading-upper">Lista de Productos</span>
                                </h2>
                                
                                    <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Categoria</th>
                                            <th scope="col">Acciones</th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allprod as $allproduc)
                                                <tr>
                                                    <th scope="row"><?= $allproduc->id ?></th>
                                                    <td><?= $allproduc->name ?></td>
                                                    <td><?= $allproduc->price ?></td>
                                                    <td><?= $allproduc->description ?></td>
                                                    <td><?= $allproduc->stock ?></td>
                                                    <td><img  src="uploads/products/img/<?= $allproduc->image ?>" alt="" width="50" height="30"/></td>
                                                    <td><?= $allproduc->category->name ?></td>
                                                    <td><button onclick="window.location='../public/<?= $allproduc->id ?>/delete'" method="get" name="delete" type="button" class="btn btn-danger">Eliminar</button>
                                                        <button onclick="window.location='../public/products/<?= $allproduc->id ?>'" method="get" name="edit" type="button" class="btn btn-primary">Editar</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
    }
@else{
        <h1 class="text-center navbar-nav mx-auto " >

            No hay productos
        </h1>

    }
    @endif

<footer class="footer text-faded text-center py-5">
  <div class="container">
    <p class="m-0 small">Copyright &copy; Your Website 2020</p>
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
</body>

</html>
