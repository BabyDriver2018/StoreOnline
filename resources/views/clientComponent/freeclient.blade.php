@extends('layouts.app')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('') }}</div>
                    <button onclick="window.location='/'" name="buy" method='get' type="button" class="btn btn-primary">Volver al Inicio</button>
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
                                                  <hr>
                                                  <hr>
                                                  <hr>
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
