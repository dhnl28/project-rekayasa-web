<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = [
            'nim' => '123456789',
            'nama' => 'Dhanil Surya Prawira',
            'prodi' => 'Sistem Informasi',
            'email' => 'dhnlsurya@gmail.com',
            'kampus' => 'Universitas Pamulang',
            'status' => 'Aktif',
        ];

    return view('partials.mahasiswa', compact('mahasiswa'));
    }

}
