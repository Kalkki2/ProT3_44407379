<?php

namespace App\Controllers;
use App\Models\Usuario_Model;
use App\Models\Domicilio_Model;
use App\Models\Localidad_Model;

class Usuario_Controller extends BaseController{
    public function __construct(){
        helper(['form','url']);
    }

    public function mostrarFormRegistrarse(){
        $localidad_model = new Localidad_Model();
        $data['localidades'] = $localidad_model->join('provincias', 'provincias.id_provincia = localidades.id_provincia')->findAll();

        $data['titulo']='Registrarse';
        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/registro_usuario_view').view('plantillas/footer');   
    }

    
    public function mostrarLogin(){
        $data['titulo']='Login';

        return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/login_view').view('plantillas/footer');
    }






    public function formVali(){
        $request = \Config\Services::request();
        $localidad_model = new Localidad_Model();
         $usuario_model = new Usuario_Model();

        $reglas = [
            'nombre' => 'required|min_length[5]|max_length[35]',
            'apellido' => 'required|min_length[5]|max_length[35]',
            'email' => 'required|valid_email|is_unique[usuarios.usuario_email]',
            'codPostal' => 'required|min_length[6]|max_length[10]',
            'telefono' => 'required|min_length[10]|max_length[10]|numeric',
            'localidad' => 'is_not_unique[localidades.id_localidad]',
            'password' => 'required|min_length[8]|max_length[8]',
            'password2' => 'required|min_length[8]|matches[password]',
            
        ];

        $input = $this->validate($reglas);  

        if(!$input){
            $data['titulo'] = 'Registrarse';
            $data['localidades'] = $localidad_model->join('provincias', 'provincias.id_provincia = localidades.id_provincia')->findAll();
            $data['validation'] = $this->validator;

            return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/registro_usuario_view').view('plantillas/footer');
        }else{
            $domicilio_model = new Domicilio_Model();
            $idProvincia = $localidad_model->select('id_provincia')->where('id_localidad', $request->getPost('localidad'))->first();

            $data_domicilio = [
                'codigo_postal' => $request->getPost('codPostal'), 
                'provincia_id' => $idProvincia,
                'localidad_id' =>$request->getPost('localidad'),
            ];
             
            $domicilio_model->insert($data_domicilio);
            $direccion_id = $domicilio_model->getInsertID();

            $data_usuario = [
                'usuario_nombre' => $request->getPost('nombre'),
                'usuario_apellido' => $request->getPost('apellido'),
                'usuario_email' => $request->getPost('email'),
                'usuario_direccion_id' =>   $direccion_id ,
                'usuario_telefono' => $request->getPost('telefono'),
                'usuario_password' => password_hash($request->getPost('password'), PASSWORD_BCRYPT),
                'usuario_estado' => 1,
                'perfil_id' => 2,
            ];

           $usuario_model->insert($data_usuario);
            return redirect()->route('login')->with('mensaje', 'Se registro con exito!');

        }


    }













    
    public function buscar_usuario(){
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();
        $session = session();

   
        $reglas = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
        ];
           
        $input = $this->validate($reglas);  

        if(!$input){
            $data['titulo'] = 'Login';
            $data['validation'] = $this->validator;
        
            return view('plantillas/head', $data).view('plantillas/navbar').view('contenido/login_view').view('plantillas/footer');
        }

        $loginCorreo = $request->getPost('email');
        $loginContrasenia = $request->getPost('password');

        $user_model = new Usuario_Model();
        $user = $user_model->where('usuario_email', $loginCorreo)->first();

        if( $user && password_verify($loginContrasenia, $user['usuario_password'])){
           
          return redirect()->route('/');
            
        }else{
            return redirect()->route('login')->with('mensaje', 'Usuario y/o Contraseña incorrecto');
        }
    }
    










}










