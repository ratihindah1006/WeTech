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
}
