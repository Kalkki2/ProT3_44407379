<?php

namespace App\Models;

use CodeIgniter\Model;

class Domicilio_Model extends Model{
    protected $table      = 'domicilios';
    protected $primaryKey = 'id_domicilio';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [ 'codigo_postal', 'provincia_id', 'localidad_id'];
}