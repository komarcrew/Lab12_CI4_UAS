<?php

namespace App\Controllers;

use App\Models\PelayananModel;

class Pelayanan extends BaseController
{
    protected $pelayananModel;
    public function __construct()
    {
        $this->pelayananModel = new PelayananModel();
    }
    public function index()
    {
        $pelayanan = $this->pelayananModel->findAll();

        $data = [
            'title' => 'Daftar Pelayanan',
            'pelayanan' => $pelayanan
        ];


        return view('/pelayanan/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Pelayanan'
        ];
        return view('/pelayanan/create', $data);
    }

    public function save()
    {
        $this->pelayananModel->save([
            'nama' => $this->request->getVar('nama'),
            'keterangan' => $this->request->getVar('keterangan'),
            'kode' => $this->request->getVar('kode'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/pelayanan');
    }

    public function delete($id)
    {
        $this->pelayananModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/pelayanan');
    }

    public function edit($id)
    { 
        $pelayanan = $this->pelayananModel->findAll();
        $data = [
        'title' => 'Form Ubah Data Antrian',
        'validation' => \Config\Services::validation(),
        'pelayanan' => $this->pelayananModel->getPelayanan($id)
        ];

        return view('pelayanan/edit', $data);
    }
    public function update($id)
    {
        $this->pelayananModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'keterangan' => $this->request->getVar('keterangan'),
            'kode' => $this->request->getVar('kode')
        
        ]);
        
    
        session()->setFlashdata('pesan', 'Data berhasil diubah!');
        return redirect()->to('/pelayanan/index');
    }
}