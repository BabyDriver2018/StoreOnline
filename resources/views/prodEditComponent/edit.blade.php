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

    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner text-center rounded">
                        <h2 class="section-heading mb-7">
                            <span class="section-heading-upper">Editar Producto</span>
                        </h2>
                        <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                            <form href="" method="post"
                                class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                {{ method_field('POST') }}
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Nombre:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Nombre del Producto" required minlength="3" value="<?=$oneprod['name']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Descripcion:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description" rows="3" required
                                            minlength="10" placeholder="Descripcion del Producto" ><?=$oneprod['description']?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Price:</label>
                                    <div class="col-sm-10">
                                        <input type="number" min="1" class="form-control" name="price"
                                            placeholder="Ingrese su precio" pattern="[0-9]{1,2}" value="<?=$oneprod['price']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Stock:</label>
                                    <div class="col-sm-10">
                                        <input type="number" min="1" class="form-control" name="stock"
                                            placeholder="Ingrese su stock" pattern="[0-9]{1,2}" value="<?=$oneprod['stock']?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Elegir una imagen</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" value="<?=$oneprod['stock']?>">
                                  </div>

                                <div class="form-group mt-3">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Agregar Cambios</button>
                                    </div>
                                </div>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
