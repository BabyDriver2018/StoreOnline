@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <label> Hola {{ Auth::user()->name }} Bienvenido a su cuenta!</label>
                    </div>
                    <div>
                        @if (!empty($allprod))
                            @foreach ($allprod as $allproduc)
                                <section class="page-section">
                                    <div class="container">
                                        <div class="product-item">
                                            <div class="product-item-title d-flex">
                                                <div class="bg-faded p-5 d-flex ml-auto rounded">
                                                    <h2 class="section-heading mb-0">

                                                        <span class="section-heading-upper"><?= $allproduc->name ?>
                                                                <button onclick="window.location='/client/<?= $allproduc->id ?>/buy'" name="buy" method='get' type="button" class="btn btn-primary">Comprar</button>
                                                              </span>
                                                              <span class="section-heading-lower"><?= $allproduc->category->name ?> - S/<?= $allproduc->price ?>
                                                              </span>

                                                            </h2>
                                                          </div>

                                                        </div>
                                                          <img class="product-item-img mx-auto d-flex rounded  mb-3 mb-lg-0" src="uploads/products/img/<?= $allproduc->image ?>" alt=""  width="596" height="460"/>
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

                                    @else
                                                    <h1 class="text-center navbar-nav mx-auto " >

                                                      No hay productos
                                                    </h1>

                                                  @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
