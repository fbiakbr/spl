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
        $siswa->insert([
            'nis' => $this->request->getVar('nis'),
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'kelas' => $this->request->getVar('kelas'),
        ]);
        return redirect()->to('/admin/data_siswa');
    }
    public function edit_siswa($nis)
    {
        $siswa = new SiswaModel();
        $data = [
            'title' => 'Edit Siswa',
            'session' => session(),
            'validation' => \Config\Services::validation(),
            'siswa' => $siswa->find($nis),
        ];
        return view('admin/edit_siswa', $data);
    }
    public function hapus_siswa($nis)
    {
        $siswa = new SiswaModel();
        $siswa->delete($nis);
        return redirect()->to('/admin/data_siswa');
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
