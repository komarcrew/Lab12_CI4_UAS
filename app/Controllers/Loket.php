<?php

namespace App\Controllers;

use App\Models\LoketModel;

class Loket extends BaseController
{
    protected $loketModel;
    public function __construct()
    {
        $this->loketModel = new LoketModel();
    }
    public function index()
    {
        $loket = $this->loketModel->findAll();

        $data = [
            'title' => 'Daftar Loket',
            'loket' => $loket
        ];


        return view('/loket/index', $data);
    }

    public function create()
    {
        $data =[
            'title' => 'Form Tambah Data Loket'
        ];
        return view('/loket/create', $data);
    }

    public function save()
    {
        $this->loketModel->save([
            'nama' => $this->request->getVar('nama'),
            'keterangan' => $this->request->getVar('keterangan'),
            'pelayanan_id' => $this->request->getVar('pelayanan_id'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/loket/index');
    }

    public function delete($id)
    {
        $this->loketModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/loket/index');
    }
    public function edit($id)
    { 
        $loket = $this->loketModel->findAll();
        $data = [
        'title' => 'Form Ubah Data Antrian',
        'validation' => \Config\Services::validation(),
        'loket' => $this->loketModel->getLoket($id)
        ];

        return view('/loket/edit', $data);
    }
    public function update($id)
    {
        $this->loketModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'keterangan' => $this->request->getVar('keterangan'),
            'pelayanan_id' => $this->request->getVar('pelayanan_id')
        
        ]);
        
    
        session()->setFlashdata('pesan', 'Data berhasil diubah!');
        return redirect()->to('/loket/index');
    }

}