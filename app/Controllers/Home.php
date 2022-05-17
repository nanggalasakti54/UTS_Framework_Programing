<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index()
    {
        $Mahasiswa = new Mahasiswa();
        $data ['nama'] = $Mahasaiswa -> findall();
        return view('Home', $data);
    }



}


