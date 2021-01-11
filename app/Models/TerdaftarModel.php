<?php namespace App\Models;

use CodeIgniter\Model;

class TerdaftarModel extends Model
{
    public function get_terdaftar()
    {
        return $this->db->table('user')->get()->getResultArray();
    }
}