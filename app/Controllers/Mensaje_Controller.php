<?php

namespace App\Controllers;
use App\Models\Mensaje_Model;

class Mensaje_Controller extends BaseController{
    public function __construct(){
        helper(['form','url']);
    }

    public function mostrarContacto(){
        $data['titulo']='Contacto';

        return view('Frontend/plantillas/head', $data).view('Frontend/plantillas/navbar').view('Backend/Mensajes/contacto_view').view('Frontend/plantillas/footer');
    }

    public function validarYAgregarMensaje(){
        $request = \Config\Services::request();
       
        $reglas =[
            'nombre' => 'required',
            'email' => 'required|valid_email',
            'motivo' => 'required|min_length[8]',
            'consulta' => 'required|min_length[10]',
        ];

        $input = $this->validate($reglas);  

        if(!$input){
           $data['titulo'] = 'Contacto';
           $data['validation'] = $this->validator;

            return view('Frontend/plantillas/head', $data).view('Frontend/plantillas/navbar').view('Backend/Mensajes/contacto_view').view('Frontend/plantillas/footer');
        }else{
            $data = [
                'mensaje_nombre' => $request->getPost('nombre'),
                'mensaje_email' => $request->getPost('email'),
                'mensaje_motivo' => $request->getPost('motivo'),
                'mensaje_consulta' => $request->getPost('consulta'),
                'mensaje_estado' => 1,
            ];

            $mensaje_model = new Mensaje_Model();
            $mensaje_model->insert( $data );

            return redirect()->route('contacto')->with('mensaje', 'El mensaje se envio con exito!');
        }
    }

    public function listarConsultas(){
        $mensaje_model = new Mensaje_Model();

        $data['consultas'] = $mensaje_model->findAll();
        $data['titulo'] = 'Lista Consultas';

        return view('Frontend/plantillas/head', $data).view('Frontend/plantillas/navbar_admin_view').view('Backend/mensajes/listaConsutas_view').view('Frontend/plantillas/footer_admin_view');
    }

    public function leerMensaje($id = null){
        $mensaje_model = new Mensaje_Model();

        $data = array('mensaje_estado' => 0);
        $mensaje_model->update($id, $data);
        
        return redirect()->route('ver_consultas');
    }
}


   