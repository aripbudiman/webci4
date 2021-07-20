<?php

namespace App\Models;

use CodeIgniter\Model;

class PetugasModel extends Model
{
    protected $table      = 'petugas';
    protected $primaryKey = 'id_petugas';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nama_petugas', 'alamat', 'jabatan'];

    protected $validationRules    = [
        'nama_petugas'     => 'required|min_length[3]',
        'alamat'        => 'required',
        'jabatan'     => 'required|min_length[3]',
    ];

    protected $validationMessages = [
        'nama_petugas'        => [
            'required' => 'Data tidak boleh kosong!',
            'min_length' => 'karakter minimal 3huruf!',
        ],
        'alamat'        => [
            'required' => 'Data tidak boleh kosong!'
        ],
        'jabatan'        => [
            'required' => 'Data tidak boleh kosong!',
            'min_length' => 'karakter minimal 3!',
        ]
    ];

    public function simpanData($data)
    {
        if ($this->save($data) === false) {
            return false;
        }
        return true;
    }
}
