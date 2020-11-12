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

                        {{ __('You are logged in!') }}
                    </div>
                    <div>
                            <h2 class="section-heading mb-7">
                                <span class="section-heading-upper">Detalles de su compra</span>
                            </h2>
                            <br>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <form action="../../register/<?= $product->id?>/<?=$product->category->id?>/buy" method="post" class="form-horizontal"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    {{ method_field('POST') }}
                                    <div class="form-group">
                                        <label class="control-label col-sm-20">Nombre del Producto:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-20" >{{ $product->name }}</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-20">Stock Disponible:</label>
                                        <div class="form-group">
                                            <label class="control-label col-sm-20">{{ $product->stock }}</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-sm-20">Cantidad:</label>
                                        <div class="col-sm-10">
                                            <input type="number" min="1" max="{{ $product->stock }}" class="form-control" name="cantidad"
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
        </div>
    </div>
@endsection