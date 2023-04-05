
# Sistem Pemakaian Lab

Sistem Pemakaian Lab (SPL) adalah sebuah sistem yang digunakan untuk mempermudah proses pemakaian ruangan di Laboratorium SMK Ma'arif NU Tirto.


## Features

- Admin
    - CRUD semua data
    - Filter data (nis, kelas, tanggal)
    - Cetak laporan
- User
    - Input data pemakaian
    - Data siswa otomatis
    - Jadwal otomatis
    - Input lab & no pc
    - Input materi praktikum

## Installation

Clone this repository to your local machine:

```bash
  git clone https://github.com/fbiakbr/spl.git
```
Change the directory to the cloned repository and run the following command:

```bash
  cd spl
  composer install
```

Run the following command to start application:
```bash
php spark serve
```