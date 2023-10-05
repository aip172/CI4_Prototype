<?php

namespace App\Controllers;

use App\Models\AsesiModel;

class Asesi extends BaseController
{
    protected $asesiModel;
    public function __construct()
    {
        $this->asesiModel = new AsesiModel();
    }

    public function index()
    {
        $asesi = $this->asesiModel->findAll();
        $data = [
            'title' => 'Daftar Asesi',
            
        ];
        return view('asesi/index', $data);
    }
}