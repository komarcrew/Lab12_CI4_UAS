<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function antrian()
    {
        $data = [
            'title' => 'Antrian | Sistem Antrian'
        ];
        echo view('pages/antrian',$data);
    }

    public function daftar()
    {
        $data = [
            'title' => 'Daftar Antrian | Sistem Antrian'
        ];
        echo view('pages/daftar', $data);
    }
    public function loket()
    {
        $data = [
            'title' => 'Loket | Sistem Antrian'
        ];
        echo view('pages/loket', $data);
    }
    public function admin()
    {
        $data = [
            'title' => 'Tampilan Antrian | Sistem Antrian'
        ];
        echo view('pages/admin', $data);
    }

}