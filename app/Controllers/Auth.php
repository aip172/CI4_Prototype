<?php

namespace App\Controllers;

class Auth extends BaseController
{
  public function login()
  {
    $data = [
      'title' => 'Asessment Kawatama',
    ];
    return view('auth/login', $data);
  }

  public function register()
  {
    $data = [
      'title' => 'Buat akun',
    ];
    return view('auth/register', $data);
  }
}
