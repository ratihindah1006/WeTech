<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $useTimestamps = true;
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['nama', 'email', 'password', 'role_id', 'is_active', 'date_created'];

    public function getLogin($email)
    {
        return $this->table('user')->where('email', $email)->get()->getRow();
    }

    public function get_user()
    {
        return $this->db->table('user')->get()->getResultArray();
    }
    public function insert_user($data)
        {
            return $this->db->table('user')->insert($data);
        }
    public function edit_user($user_id)
    {
        $query = $this->db->query("select * from user where user_id = $user_id");
        $row = $query->getRowarray();
        return $row;
    }
    public function update_user($data, $user_id)
    {
        $builder = $this->db->table('user');
        $builder->where('user_id', $user_id);
        $builder->update($data);
        return $builder;
    }
    public function delete_user($user_id)
    {
        $builder = $this->db->table('user');
        $builder->where('user_id', $user_id);
        $builder->delete();
        return $builder;
    }
}
