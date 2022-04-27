<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        return view('menu2');
    }

    public function halaman($nama, $nim, $jurusan)
    {
        return "Hallo $nama , nim kamu adalah $nim di Jurusan $jurusan";
    }
    
}