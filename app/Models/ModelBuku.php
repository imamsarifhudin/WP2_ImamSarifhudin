<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBuku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id'; // Ganti 'id' dengan primary key tabel buku jika berbeda

    // Manajemen buku
    public function getBuku()
    {
        return $this->findAll();
    }

    public function bukuWhere($where)
    {
        return $this->where($where)->first();
    }

    public function simpanBuku($data = null)
    {
        return $this->insert($data);
    }

    public function updateBuku($data = null, $where = null)
    {
        return $this->update($where, $data);
    }

    public function hapusBuku($where = null)
    {
        return $this->delete($where);
    }

    public function total($field, $where)
    {
        return $this->selectSum($field)->where($where)->get()->getRow($field);
    }

    // Manajemen kategori
    public function getKategori()
    {
        return $this->db->table('kategori')->get()->getResult();
    }

    public function kategoriWhere($where)
    {
        return $this->db->table('kategori')->where($where)->get()->getRow();
    }

    public function simpanKategori($data = null)
    {
        return $this->db->table('kategori')->insert($data);
    }

    public function hapusKategori($where = null)
    {
        return $this->db->table('kategori')->delete($where);
    }

    public function updateKategori($where = null, $data = null)
    {
        return $this->db->table('kategori')->update($data, $where);
    }

    // Join
    public function joinKategoriBuku($where)
    {
        return $this->select('buku.id_kategori, kategori.kategori')
                    ->from('buku')
                    ->join('kategori', 'kategori.id = buku.id_kategori')
                    ->where($where)
                    ->get()
                    ->getResult();
    }
}
