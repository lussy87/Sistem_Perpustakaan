<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class MuridModel extends Model
{
    protected $table = 'dbo_murid';
    protected $allowedFields = [
        'nama_murid',
        'jk_murid',
        'alamat_murid',
        'no_telp_murid',
    ];
    protected $updatedField = 'updated_at';

    public function getAllMurid(){
     
       $query = $this->db->table('dbo_murid')
       ->orderBy('murid_id', 'asc')
       ->get()->getResultArray();  

       return $query;
    }
    public function findMuridById($id)
    {
        $murid = $this
            ->asArray()
            ->where(['murid_id' => $id])
            ->first();

        if (!$murid) throw new Exception('Could not find murid for specified ID');

        return $murid;
    }
}