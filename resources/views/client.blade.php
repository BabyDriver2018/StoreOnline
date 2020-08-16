<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

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

    @if (!empty($allprod)){
        @foreach ($allprod as $allproduc)
            <section class="page-section">
                <div class="container">
                    <div class="product-item">
                        <div class="product-item-title d-flex">
                            <div class="bg-faded p-5 d-flex ml-auto rounded">
                                <h2 class="section-heading mb-0">

                                    <span class="section-heading-upper"><?= $allproduc['name'] ?>
                <button onclick="window.location='../public/client/<?= $allproduc['id'] ?>/buy'" name="buy" method='get' type="button" class="btn btn-primary">Comprar</button>
              </span>
                <span class="section-heading-lower"><?= $allcategory[$allproduc['idcategory'] - 1]['name'] ?> - S/<?= $allproduc['price'] ?>
              </span>
              
            </h2>
          </div>
          
        </div>
        <img class="product-item-img mx-auto d-flex rounded  mb-3 mb-lg-0" src="uploads/products/img/<?= $allproduc['image'] ?>" alt=""  width="596" height="460"/>
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-lower">Descripción</span>
            </h2>
              <p class="mb-0"><?= $allproduc['description'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
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
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
