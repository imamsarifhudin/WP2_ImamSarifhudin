<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id'; // Ganti 'id' dengan primary key tabel user jika berbeda

    public function simpanData($data = null)
    {
        $this->insert($data);
    }

    // public function cekData($where = null)
    // {
    //     return $this->where($where)->get()->getRowArray();
    // }
    public function cekData($where = null)
    {
        $db = \Config\Database::connect(); // Get the database connection instance
        $builder = $db->table('user');

        if ($where !== null) {
            $builder->where($where);
        }

        return $builder->get();
    }


    public function getUserWhere($where = null)
    {
        return $this->where($where)->get()->getRowArray();
    }

    public function cekUserAccess($where = null)
    {
        return $this->db->table('access_menu')->where($where)->get()->getResultArray();
    }

    public function getUserLimit()
    {
        return $this->limit(10, 0)->get()->getResultArray();
    }
}
