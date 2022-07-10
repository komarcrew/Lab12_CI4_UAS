<?php

namespace App\Models;

use CodeIgniter\Model;

class LoketModel extends Model
{
    protected $table = 'loket';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama','keterangan','pelayanan_id'];

    public function getLoket($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}