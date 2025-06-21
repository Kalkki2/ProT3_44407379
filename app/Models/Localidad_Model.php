<?php

namespace App\Models;

use CodeIgniter\Model;

class Localidad_Model extends Model{
    protected $table      = 'localidades';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_localodad', 'id_provincia', 'localidad_desc'];
}