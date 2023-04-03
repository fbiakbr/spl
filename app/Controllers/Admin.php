<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\PemakaianModel;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'session' => session(),
        ];
        return view('admin/index', $data);
    }
    public function data_siswa()
    {
        $siswa = new SiswaModel();
        $data = [
            'title' => 'Data Siswa',
            'session' => session(),
            'siswa' => $siswa->findAll(),
        ];
        return view('admin/data_siswa', $data);
    }
    public function tambah_siswa()
    {
        $data = [
            'title' => 'Tambah Siswa',
            'session' => session(),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/tambah_siswa', $data);
    }
    public function save_siswa()
    {
        $siswa = new SiswaModel();
        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'kelas' => $this->request->getPost('kelas'),
        ];
        if ($this->validate([
            'nis' => [
                'rules' => 'required|is_unique[siswa.nis]',
                'errors' => [
                    'required' => 'NIS harus diisi',
                    'is_unique' => 'NIS sudah terdaftar',
                ],
            ]
        ])) {
            $siswa->insert($data);
            session()->setFlashdata('success', 'Data siswa berhasil ditambahkan');
            return redirect()->to('/admin/data_siswa');
        } else {
            session()->setFlashdata('error', 'NIS sudah terdaftar');
            return redirect()->to('/admin/tambah_siswa')->withInput();
        }
    }
    public function daftar_pemakaian()
    {
        $pemakaian = new PemakaianModel();
        $data = [
            'title' => 'Daftar Pemakaian',
            'session' => session(),
            'pemakaian' => $pemakaian->findAll(),
        ];
        return view('admin/daftar_pemakaian', $data);
    }
}
