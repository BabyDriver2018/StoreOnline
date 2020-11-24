<!-- all prod -->


@foreach ($allprod as $allproduc)
    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item  {{ $allproduc->category->name }}">

        <!-- Block2 -->
        <div class="block2">
            <div class="block2-pic hov-img0">
                <img src="uploads/products/img/<?= $allproduc->image ?>" alt="IMG-PRODUCT">

                
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                    <a  class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                        {{ $allproduc->name }}
                    </a>

                    <span class="stext-105 cl3">
                     S/	{{ $allproduc->price }}
                    </span>
                    <span class="stext-105 cl3">
                        Stock=  {{ $allproduc->stock }}
                       </span>
                </div>
                <br>
                <div class="block2-txt-child2 flex-r p-t-3">
                    <br>
                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                        
                        <button  name="delete" type="button" class="btn btn-danger" data-target="#exampleModal" data-toggle="modal">Eliminar</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" style="position: relative ; margin: 10% auto;padding: 20px;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  ¿Estás seguro que deseas eliminar el producto?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                  <button  onclick="window.location='/<?= $allproduc->id ?>/delete'" method="get" name="delete" type="button" class="btn btn-danger">Si Eliminar</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        <button onclick="window.location='/products/<?= $allproduc->id ?>'" method="get" name="edit" type="button" class="btn btn-primary">Editar</button>
                    </a>
                </div>
            </div>
            
        </div>
        <div id="respuesta"></div>
        
    </div>
    @endforeach
    <!-- Vertically centered modal -->

    


    

  
  <!-- Modal -->

    <script>
        window.addEventListener("load",function(){
            document.getElementById("name").addEventListener("keyup",function(){
                fetch(`/product/buscador?name=${document.getElementById("name").value}`,{
                    method:'get'
                    })
                    .then( response => response.text())
                    .then(html => {
                        document.getElementById("respuesta").innerHTML = html
                    })
                    
            })
        })
    </script>
