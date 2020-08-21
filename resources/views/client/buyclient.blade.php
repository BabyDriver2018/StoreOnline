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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link type="text/css" href="{{ asset('css/business-casual.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->

    @if (!empty($product)){

        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner text-center rounded">
                            <h2 class="section-heading mb-7">
                                <span class="section-heading-upper">Detalles de su compra</span>
                            </h2>
                            <br>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <form action="../../register/<?= $product['id']?>/<?=$product['idcategory']?>/buy" method="post" class="form-horizontal"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    {{ method_field('POST') }}
                                    <div class="form-group">
                                        <label class="control-label col-sm-20">Nombre del Producto:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-20" >{{ $product['name'] }}</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-20">Stock Disponible:</label>
                                        <div class="form-group">
                                            <label class="control-label col-sm-20">{{ $product['stock'] }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-20">Cantidad:</label>
                                        <div class="col-sm-10">
                                            <input type="number" min="1" max="{{ $product['stock'] }}" class="form-control" name="cantidad"
                                                placeholder="Ingrese su Cantidad" pattern="[0-9]{1,2}" required>
                                        </div>
                                    </div>
    
                                    <div class="form-group mt-3">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Confirma Compra</button>
                                        </div>
                                    </div>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        }
    @else
        <h1 class="text-center navbar-nav mx-auto ">

            No hay productos
        </h1>

    @endif

    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; Your Website 2020</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
