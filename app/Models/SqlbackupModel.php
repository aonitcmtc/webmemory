<?php

namespace App\Models;

use CodeIgniter\Model;

class SqlbackupModel extends Model
{
    protected $table = 'sql_backup';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content', 'output', 'status', 'created_at'];

    
    // Custom method to get one member by ID
    public function getById($id)
    {
        return $this->find($id);
    }

    public function getBytitle($title)
    {
        return $this->where('title', $title)->first();
    }

    // Custom method to get all members
    public function getAll()
    {
        // die('getDataAll');
        return $this->findAll();
    }

    public function getUserByUsername($username)
    {
        return $this->where('first_name', $username)->first();
    }

    public function insertData($body)
    {
        $id = $this->insert($body);
        return $id;
    }

}