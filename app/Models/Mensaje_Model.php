<?php

namespace App\Models;

use CodeIgniter\Model;

class Mensaje_Model extends Model{
    protected $table      = 'mensajes';
    protected $primaryKey = 'id_mensaje';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['mensaje_nombre', 'mensaje_email', 'mensaje_motivo', 'mensaje_consulta', 'mensaje_estado'];

}