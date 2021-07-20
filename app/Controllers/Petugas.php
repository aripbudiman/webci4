<?php

namespace App\Controllers;

use App\Models\PetugasModel;

class Petugas extends BaseController
{
    protected $petugasModel;
    public function __construct()
    {
        $this->petugasModel = new PetugasModel;
    }
    public function index()
    {
        $petugas = $this->petugasModel->findAll();
        $data = [
            'title' => 'Data petugas',
            'petugas' => $petugas
        ];
        return view('petugas/data', $data);
    }


    public function tambah()
    {
        // session();
        $data = [
            'title' => 'Tambah Data ',
            // 'validation' => \Config\Services::validation()
        ];
        return view('petugas/tambah', $data);
    }

    public function save()
    {
        $model = new PetugasModel();
        $data = [
            'nama_petugas' => $this->request->getVar('nama_petugas'),
            'alamat' => $this->request->getVar('alamat'),
            'jabatan' => $this->request->getVar('jabatan')
        ];

        $result = $model->simpanData($data);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

        if (!$result) {
            $data = [
                'title' => 'Tambah Data ',
                // 'validation' => \Config\Services::validation()
            ];
            session()->setFlashdata('errors', $model->errors());
            return view('petugas/tambah', $data);
        }

        return redirect()->to('/petugas');
    }

    public function delete($id_petugas)
    {
        $this->petugasModel->delete($id_petugas);

        return redirect()->to('/petugas');
    }
}
