<?php namespace App\Models;

use CodeIgniter\Model;

class MovieModel extends Model
{
    public function get_movie()
    {
        return $this->db->table('movie')->get()->getResultArray();
    }
}