<?php

namespace App\Controllers;
use App\Models\Usuario_Model;
use App\Models\Localidad_Model;

class Administrador_Controller extends BaseController{
        public function __construct(){
        helper(['form','url']);
    }
    
    public function mostrarIndexAdmin(){
        $data['titulo']='IndexAdmin';

        return view('Frontend/plantillas/head', $data).view('Frontend/plantillas/navbar_admin_view').view('Frontend/plantillas/principal_admin_view').view('Frontend/plantillas/footer_admin_view'); 
    }

    public function gestionarUsuarios(){
        $usuario = new Usuario_Model();
        $data['usuarios'] = $usuario->findAll();
        $data['titulo'] = 'Lista Usuarios';
        $data['usuarios'] = $usuario
       ->select('
        usuarios.id_usuario,
        usuarios.usuario_nombre,
        usuarios.usuario_apellido,
        usuarios.usuario_email,
        usuarios.usuario_telefono,
        usuarios.usuario_estado,
        usuarios.perfil_id,
        usuarios.usuario_direccion_id,
        domicilios.id_domicilio,
        CONCAT(provincias.provincia_desc, "/", localidades.localidad_desc) AS provincia_localidad')
        ->join('domicilios', 'usuarios.usuario_direccion_id = domicilios.id_domicilio')
        ->join('localidades', 'domicilios.localidad_id = localidades.id_localidad')
        ->join('provincias', 'localidades.id_provincia = provincias.id_provincia')
        ->findAll();

    
        return view('Frontend/plantillas/head', $data).view('Frontend/plantillas/navbar_admin_view').view('Backend/Usuarios/listarUsuarios_view').view('Frontend/plantillas/footer_admin_view');
    }

    public function darAltaUsuario($id = null){
        $usuario = new Usuario_Model();
        $data = array('usuario_estado' => 1);
        $usuario->update($id, $data);

        return redirect()->route('gestionar_usuarios');
    }

    public function darBajaUsuario($id = null){
        $usuario = new Usuario_Model();
        $data = array('usuario_estado' => 0);
        $usuario->update($id, $data);

        return redirect()->route('gestionar_usuarios');
    }

        
    public function formEditarUsuario($id = null){
        $usuario = new Usuario_Model();
        $data['usuario'] = $usuario->where('id_usuario', $id)->first();
        $localidad_model = new Localidad_Model();
        $data['localidades'] = $localidad_model->join('provincias', 'provincias.id_provincia = localidades.id_provincia')->findAll();

        $data['titulo'] = 'Editar';

        return view('Frontend/plantillas/head', $data).view('Frontend/plantillas/navbar_admin_view').view('Backend/Usuarios/formEditarUsuario_view').view('Frontend/plantillas/footer_admin_view');
    }

    public function actualizarPerfilUser(){
        $request = \Config\Services::request();
        $usuario = new Usuario_Model();
        $idUser = $request->getPost('idUser');

        $data['usuario'] = $usuario->where('id_usuario', $idUser)->first();
        $mailActual = $request->getPost('email');

        if($mailActual==$data['usuario']['usuario_email']){
            $correoUp =  $data['usuario']['usuario_email'] ;
        }else{
            $correoUp =  $mailActual;
        }

        
        $reglas =[
            'nombre' => 'required|min_length[5]|max_length[35]',
            'apellido' => 'required|min_length[5]|max_length[35]',
            'email' => 'required|valid_email',
            'telefono' => 'required|min_length[10]|max_length[10]|numeric',
        ];
        
        $input = $this->validate($reglas);
 
        if(!$input){
             $data['titulo'] = 'Mi Perfil';
            $data['validation'] = $this->validator;

            return view('Frontend/plantillas/head', $data).view('Frontend/plantillas/navbar').view('Backend/Usuarios/formEditarUsuario_view').view('Frontend/plantillas/footer');

        }else{
            $data = [
                'usuario_nombre' => $request->getPost('nombre'),
                'usuario_apellido' => $request->getPost('apellido'),
                'usuario_email' => $correoUp,          
                'usuario_telefono' => $request->getPost('telefono'), 
                'perfil_id' => $request->getPost('perfil'), 
            ];

            $usuario->update($idUser, $data);
            return redirect()->route('gestionar_usuarios');
        }
    }

}