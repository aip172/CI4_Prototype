<?php

namespace App\Controllers;

use App\Models\AsesiModel;

class Pages extends BaseController
{
    // Controller db asesi
    protected $asesiModel;
    public function __construct()
    {
        $this->asesiModel = new AsesiModel();
    }

    // Controller page index or home
    public function index()
    {
        $data = [
            'title' => 'Home',
            'asesi' => $this->asesiModel->getAsesi()
        ];
        return view('pages/home', $data);
    }

    // Controller page detail
    public function detail($slug)
    {
        $data = [
            'title' => 'Detail asesi',
            'asesi' => $this->asesiModel->getAsesi($slug)
        ];

        // jika tidak ada detail
        if (empty($data['asesi'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Asesi ' . $slug . ' tidak ditemukan');
        }

        return view('pages/detail', $data);
    }

    // Controller page create
    public function create()
    {
        $data = [
            'title' => 'Tambah data asesi',
        ];
        return view('pages/create', $data);
    }

    // Controller save
    public function save()
    {
        // session();
        // if (!$this->validate([
        //     'nama_asesi' => [
        //         'rules' => 'required|max_length[50]',
        //         'errors' => [
        //             'required' => 'Nama harus diisi!'
        //         ]
        //     ],
        //     'foto' => [
        //         'rules' => 'uploaded[foto]|max_size[foto, 2048]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
        //         'errors' => {
        //             wdaodwald[awkdompw]
        //         }
        //     ]
        // ])) {
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('/create')->withInput();
        // }

        // ambil gambar
        $fileFoto = $this->request->getFile('foto');
        // move to folder
        $fileFoto->move('img');
        // ambil nama file
        $namaFoto = $fileFoto->getName();

        $slug = url_title($this->request->getVar('nama_asesi'), '-', true);
        $Nama = ucwords($this->request->getVar('nama_asesi'));
        $this->asesiModel->save([
            'nama_asesi' => $Nama,
            'slug' => $slug,
            'posisi' => $this->request->getVar('posisi'),
            'foto' => $namaFoto,
            'create_at' => null,
            'update_at' => null
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/');
    }

    // Controller page profile
    public function profile()
    {
        $data = [
            'title' => 'Profile'
        ];
        return view('pages/profile', $data);
    }

    public function logout()
    {
        return view('auth/login');
    }
}
