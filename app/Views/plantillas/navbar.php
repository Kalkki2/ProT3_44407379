<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold logo" href="<?php echo base_url()?>">MUSNOK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link py-1 mt-1 activar" aria-current="page" href="<?php echo base_url()?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link py-1 mt-1 activar" href="<?php echo base_url('catalogo_producto')?>">Catalogo</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link py-1 mt-1 activar" href="<?php echo base_url('contacto')?>">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link py-1 mt-1 activar" href="<?php echo base_url('login')?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link py-1 mt-1 activar" href="<?php echo base_url('registrarse')?>"><img src="assets/img/icons/person-circle.svg" alt="">Registrarse</a>
                    </li>
                    <li class="nav-carrito">
                        <p class="cant-carrito">2</p>     
                        <div >
                            <a  class="nav-link py-1 mt-1 " href="<?php echo base_url('carrito')?>"><img src="assets/img/icons/cart2.svg" alt=""></a>
                        </div>
                    </li>
                </ul> 

                <form class="d-flex" role="search">
                    <input  class="form-control me-2 input-search" type="search" placeholder="Buscar" aria-label="Search"/>
                    <button class="btn p-0" type="submit"><img class=" img-search" src="assets/img/icons/search.svg" alt=""></button>
                </form> 
            </div>
        </div>
    </nav>
</header>  

