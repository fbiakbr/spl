<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\PemakaianModel;
use App\Models\UsersModel;
use Faker\Provider\Base;
use LDAP\Result;

class Admin extends BaseController
{
    public function index()
    {
        $siswa = new SiswaModel();
        $pemakaian = new PemakaianModel();
        $data = [
            'title' => 'Dashboard',
            'session' => session(),
            'dataSiswa' => $siswa->findAll(),
            'dataPemakaian' => $pemakaian->findAll(),
            'dailyPemakaian' => $pemakaian->where('tanggal', date('Y-m-d'))->findAll(),
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
        session()->setFlashdata('message', 'Data siswa berhasil ditambahkan :)');
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
    public function update_siswa($nis)
    {
        $siswa = new SiswaModel();
        $siswa->save([
            'nis' => $nis,
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'kelas' => $this->request->getVar('kelas'),
        ]);
        session()->setFlashdata('message', 'Data siswa berhasil diubah.');
        return redirect()->to('/admin/data_siswa');
    }
    public function hapus_siswa($nis)
    {
        $siswa = new SiswaModel();
        $siswa->delete($nis);
        return redirect()->to('/admin/data_siswa');
    }
    public function import_siswa()
    {
        $data = [
            'title' => 'Import Siswa',
            'session' => session(),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/import_siswa', $data);
    }
    public function save_import_siswa()
    {
        $excel = $this->request->getFile('excel');
        $name = $excel->getRandomName();
        $excel->move('uploads', $name);
        $ext = $excel->getClientExtension();
        if ($ext == 'xlsx') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        }
        $spreadsheet = $reader->load('uploads/' . $name);
        $data = $spreadsheet->getActiveSheet()->toArray();
        array_shift($data);
        $siswa = new SiswaModel();
        foreach ($data as $row) {
            $check = $siswa->find($row[0]);
            if ($check) {
                $siswa->save([
                    'nis' => $row[0],
                    'nama_siswa' => $row[1],
                    'kelas' => $row[2],
                ]);
            } else {
                $siswa->insert([
                    'nis' => $row[0],
                    'nama_siswa' => $row[1],
                    'kelas' => $row[2],
                ]);
            }
        }
        session()->setFlashdata('message', 'Data berhasil diimport');
        return redirect()->to('/admin/data_siswa');
    }
    public function laporan_pemakaian()
    {
        $pemakaian = new PemakaianModel();
        $data = [
            'title' => 'Laporan Pemakaian',
            'session' => session(),
            'pemakaian' => $pemakaian->findAll(),
        ];
        return view('admin/laporan_pemakaian', $data);
    }
    public function hapus_pemakaian($id)
    {
        $pemakaian = new PemakaianModel();
        $pemakaian->delete($id);
        return redirect()->to(base_url('/admin/laporan_pemakaian'));
    }
    public function edit_pemakaian($id_pemakaian)
    {
        $pemakaian = new PemakaianModel();
        $data = [
            'title' => 'Edit Pemakaian',
            'session' => session(),
            'validation' => \Config\Services::validation(),
            'pemakaian' => $pemakaian->find($id_pemakaian),
        ];
        return view('admin/edit_pemakaian', $data);
    }
    public function update_pemakaian($id_pemakaian)
    {
        $pemakaian = new PemakaianModel();
        $pemakaian->save([
            'id_pemakaian' => $id_pemakaian,
            'nis' => $this->request->getVar('nis'),
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'kelas' => $this->request->getVar('kelas'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jam' => $this->request->getVar('jam'),
            'lab' => $this->request->getVar('lab'),
            'no_pc' => $this->request->getVar('no_pc'),
            'materi_praktek' => $this->request->getVar('materi_praktek')
        ]);
        session()->setFlashdata('message', 'Data pemakaian berhasil diubah.');
        return redirect()->to(base_url('/admin/laporan_pemakaian'));
    }
    public function login()
    {
        $data = [
            'title' => 'Login - Sistem Pemakaian Lab',
            'session' => session(),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/login', $data);
    }
    public function logout()
    {
        $auth = service('authentication');
        $auth->logout();
        return redirect()->to('/admin/login');
    }
    public function redirect_register()
    {
        return view('404');
    }
}
