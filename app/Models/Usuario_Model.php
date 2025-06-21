<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario_Model extends Model{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['usuario_nombre', 'usuario_apellido', 'usuario_email', 
    'usuario_direccion_id','usuario_telefono', 'usuario_password', 'usuario_estado', 'perfil_id'];
}