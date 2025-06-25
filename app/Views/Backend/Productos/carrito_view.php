<section class="container my-3">
        <h3>Tu Carrito</h3>
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table">
                    <thead class="table-head">
                      <tr>
                        <th scope="col">Nº</th>
                        <th scope="col">Productos</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Sub Total</th>
                        <th scope="col"> </th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr class="tr-body">
                            <td>1</td>
                            <td >
                                <img  src="assets/img/computadora-03.jpg" alt="" widht="100" height="100" >
                            </td>
                            <td>
                                <h6>Notebook Samsung Galaxy Core 256GB</h6>
                            </td>
                            <td>
                                <p>$ 786.789</p>
                            </td>
                            <td>                             
                               <a href="" class="text-decoration-none"><img src="assets/img/icons/chevron-left.svg"></a>
                               <input type="number"  min="1" value="1" disabled class="table-cantidad">
                               <a href="" class="text-decoration-none"><img src="assets/img/icons/chevron-right.svg"></a>
                            </td>
                            <td>
                                <h5>$ 786.789</h5>
                            </td>
                            <td>
                                <a href=""><img class="trash-icon" src="assets/img/icons/trash.svg" alt=""></a> 
                            </td>
                        </tr>
                        <tr class="tr-body">
                            <td>2</td>
                            <td >
                                <img  src="assets/img/tablet-01.webp" alt="" widht="100" height="100" >
                            </td>
                            <td>
                                <h6>Samsung Galaxy Tab A9 64gb 4gb</h6>
                            </td>
                            <td>
                                <p>$ 349.999</p>
                            </td>
                            <td>
                                <a href="" class="text-decoration-none"><img src="assets/img/icons/chevron-left.svg"></a>
                                <input type="number"  min="1" value="1" disabled class="table-cantidad">
                                <a href="" class="text-decoration-none"><img src="assets/img/icons/chevron-right.svg"></a>
                            </td>
                            <td>
                                <h5>$ 349.999</h5>
                            </td>
                            <td>
                                <a href=""><img class="trash-icon" src="assets/img/icons/trash.svg" alt=""></a> 
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row justify-content-around  mb-5">
                    <div class="col-4">
                        <a  class="btn border-dark" href=""><img class="me-2 pb-1" src="assets/img/icons/cart-x.svg" alt="">Vaciar Carrito</a>
                    </div>
                    <div class="col-8 col-md-5 text-center">
                        <h4 >Total Compra:  $ 1.136.788</h4>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-6 col-md-4 col-lg-3">
                        <a  class="btn btn-carrito w-100 " href="<?php echo base_url('catalogo_producto');?>">
                            <img class="me-2 pb-1" src="assets/img/icons/box-arrow-left.svg" alt="">Seguir comprando
                        </a>
                    </div>
                    <div class="col-6 col-md-4 text-end">
                        <a  class="btn btn-carrito " href="<?php echo base_url('opciones_pago');?>">Ordenar compra</a>
                    </div>
                </div>
            </div>
        </div>
</section >

