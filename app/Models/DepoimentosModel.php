<?php namespace App\Models;

use CodeIgniter\Model;

class DepoimentosModel extends Model
{
    protected $table      = 'depoimentos';
    protected $primaryKey = 'depoimento_id';

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    //protected $allowedFields = ['name', 'email'];

    //protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;
}