<?php

namespace App\Models;

use CodeIgniter\Model;

class CheckoutModel extends Model
{
    protected $table = 'checkout';
    protected $primaryKey = 'id_checkout';
    protected $allowedFields = ['user_id', 'title', 'tanggal', 'jam', 'total_bayar', 'bukti', 'bayar', 'is_active'];

    public function get_checkout()
    {
        return $this->db->table('checkout')->get()->getResultArray();
    }
    public function insert_checkout($data)
    {
        return $this->db->table('checkout')->insert($data);
    }
    public function edit_checkout($id_checkout)
    {
        $query = $this->db->query("select * from checkout where id_checkout = $id_checkout");
        $row = $query->getRowarray();
        return $row;
    }
    public function update_checkout($data, $id_checkout)
    {
        $builder = $this->db->table('checkout');
        $builder->where('id_checkout', $id_checkout);
        $builder->update($data);
        return $builder;
    }
    public function delete_checkout($id_checkout)
    {
        $builder = $this->db->table('checkout');
        $builder->where('id_checkout', $id_checkout);
        $builder->delete();
        return $builder;
    }
}
