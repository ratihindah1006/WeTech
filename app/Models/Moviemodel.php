<?php

namespace App\Models;

use CodeIgniter\Model;

class Moviemodel extends Model
{
    protected $table = 'movie';
    protected $primaryKey = 'movie_id';
    protected $allowedFields = ['img', 'title', 'genre', 'duration', 'released_at', 'producer', 'sutradara', 'cast', 'sinopsis', 'is_active'];

    public function get_movie()
    {
        return $this->db->table('movie')->get()->getResultArray();
    }

    public function insert_movie($data)
    {
        return $this->db->table('movie')->insert($data);
    }

    public function edit_movie($movie_id)
    {
        $query = $this->db->query("select * from movie where movie_id = $movie_id");
        $row = $query->getRowarray();
        return $row;
    }

    public function update_movie($data, $movie_id)
    {
        $builder = $this->db->table('movie');
        $builder->where('movie_id', $movie_id);
        $builder->update($data);
        return $builder;
    }

    public function delete_movie($movie_id)
    {
        $builder = $this->db->table('movie');
        $builder->where('movie_id', $movie_id);
        $builder->delete();
        return $builder;
    }

    public function getMovie($status)
    {
        return $this->db->table($this->table)->where('is_active', $status)->get()->getResultArray();
    }
}
