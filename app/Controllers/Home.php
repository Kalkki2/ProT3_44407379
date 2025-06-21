<?php

namespace App\Controllers;

class Home extends BaseController{
    public function index(): string{
        $data['titulo']='Pagina Principal';
       
        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/principal_view').view('plantillas/footer');
    }

    public function mostrarContacto(){
        $data['titulo']='Contacto';

        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/contacto_view').view('plantillas/footer');
    }

    public function mostrarFormRegistrarse(){
        $data['titulo']='Registrarse';

        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/registro_usuario_view').view('plantillas/footer');
    }

    public function mostrarQuienesSomos(){
        $data['titulo']='Registrarse';

        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/quienes_somos_view').view('plantillas/footer');
    }

    public function mostrarCatalogo(){
        $data['titulo']='Catalogo';

        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/catalogo_productos_view').view('plantillas/footer');
    }

    public function mostrarCarrito(){
        $data['titulo']='Carrito';

        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/carrito_view').view('plantillas/footer');
    }


    public function mostrarTerminosYUsos(){
        $data['titulo']='Terminos y usos';

        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/terminosYUsos').view('plantillas/footer');
    }
    
  

    public function mostrarLogin(){
        $data['titulo']='Login';

        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/login_view').view('plantillas/footer');
    }

    public function mostrarDetallesProducto(){
        $data['titulo']='Detalles';

        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/producto_detallado_view').view('plantillas/footer');
    }

    
    public function mostrarOpcionesPago(){
        $data['titulo']='Pago';

        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/pago_confirmacion_view').view('plantillas/footer');
    }

        
    public function mostrarComercializacion(){
        $data['titulo']='Pago';

        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/comercializacion_view').view('plantillas/footer');
    }
}
