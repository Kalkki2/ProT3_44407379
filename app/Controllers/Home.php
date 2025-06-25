<?php

namespace App\Controllers;

class Home extends BaseController{
    public function index(): string{
        $data['titulo']='Pagina Principal';
       
        return view('Frontend/plantillas/head', $data).
        view('Frontend/plantillas/navbar').
        view('Frontend/principal_view').
        view('Frontend/plantillas/footer');
    }


    public function mostrarQuienesSomos(){
        $data['titulo']='Registrarse';

        return view('Frontend/plantillas/head', $data).
        view('Frontend/plantillas/navbar').
        view('Frontend/quienes_somos_view').
        view('Frontend/plantillas/footer');
    }

    public function mostrarCatalogo(){
        $data['titulo']='Catalogo';

        return view('Frontend/plantillas/head', $data).
        view('Frontend/plantillas/navbar').
        view('Backend/Productos/catalogo_productos_view').
        view('Frontend/plantillas/footer');
    }

    public function mostrarCarrito(){
        $data['titulo']='Carrito';

        return view('Frontend/plantillas/head', $data).
        view('Frontend/plantillas/navbar').
        view('Backend/Productos/carrito_view').
        view('Frontend/plantillas/footer');
    }


    public function mostrarTerminosYUsos(){
        $data['titulo']='Terminos y usos';

        return view('Frontend/plantillas/head', $data).
        view('Frontend/plantillas/navbar').
        view('Frontend/terminosYUsos').
        view('Frontend/plantillas/footer');
    }
    
  
    public function mostrarDetallesProducto(){
        $data['titulo']='Detalles';

        return view('Frontend/plantillas/head', $data).
        view('Frontend/plantillas/navbar').
        view('Backend/Productos/producto_detallado_view').
        view('Frontend/plantillas/footer');
    }

    
    public function mostrarOpcionesPago(){
        $data['titulo']='Pago';

        return view('Frontend/plantillas/head', $data).
        view('Frontend/plantillas/navbar').
        view('Backend/Productos/pago_confirmacion_view').
        view('Frontend/plantillas/footer');
    }

        
    public function mostrarComercializacion(){
        $data['titulo']='Pago';

        return view('Frontend/plantillas/head', $data).
        view('Frontend/plantillas/navbar').
        view('Frontend/comercializacion_view').
        view('Frontend/plantillas/footer');
    }
}
