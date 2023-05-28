<?php

namespace App\Models;

use CodeIgniter\Model;

class AtasanModel extends Model
{
    public function __construct()
    {

        parent::__construct();
        //get all fields array
        $fields = $this->db->getFieldNames('atasan');

        //build the fields to array
        foreach ($fields as $field) {
            if ($field != 'id') {
                $this->allowedFields[] = $field;
            }
        }
    }

    protected $table            = 'atasan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAtasan($id)
    {
        return $this->where(['id' => $id])->first();
    }
    public function getAtasans()
    {
        return $this->orderBy('updated_at', 'desc')->findAll();
    }
    public function insertAtasan($data)
    {
        $this->insert($data);
    }
    public function updateAtasan($data, $id)
    {
        $this->update($id, $data);
    }
    public function deleteAtasan($id)
    {
        $this->delete($id);
    }
}
