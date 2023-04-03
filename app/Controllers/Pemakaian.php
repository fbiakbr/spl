<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\PemakaianModel;

class Pemakaian extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Sistem Pemakaian Lab SMK Ma'arif NU Tirto",
            'session' => session(),
        ];
        return view('pemakaian/index', $data);
    }
    public function input_pemakaian()
    {
        $siswa = new SiswaModel();
        $data = [
            'title' => 'Input Data Pemakaian Lab',
            'siswa' => $siswa->findAll(),
            'session' => session(),
        ];
        return view('pemakaian/input', $data);
    }
    public function save()
    {
        // insert data from form to database
        $pemakaian = new PemakaianModel();
        $pemakaian->insert([
            'nis' => $this->request->getPost('nis'),
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'kelas' => $this->request->getPost('kelas'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jam' => $this->request->getPost('jam'),
            'lab' => $this->request->getPost('lab'),
            'no_pc' => $this->request->getPost('no_pc'),
            'materi_praktek' => $this->request->getPost('materi_praktek'),
        ]);
        // set flashdata to show alert after redirect
        session()->setFlashdata('success', 'Terima kasih telah mengisi data pemakaian lab :)');
        return redirect()->to('/data_pemakaian');
    }
    public function data_pemakaian()
    {
        $pemakaian = new PemakaianModel();
        // only show data from current date
        $data = [
            'title' => 'Data Pemakaian Lab',
            'session' => session(),
            'pemakaian' => $pemakaian->where('tanggal', date('Y-m-d'))->findAll(),
        ];
        return view('pemakaian/data_pemakaian', $data);
    }
}
