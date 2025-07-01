<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = new Prodi;

        return view('prodi.tampil');
    }

    public function tambah()
    {
        return view('prodi.tampil');
    }

    public function edit($id)
    {
        return view('prodi.tampil');
    }

    public function simpan(Request $request)
    {
        return view('prodi.tampil');
    }

    public function update(Request $request)
    {
        return view('prodi.tampil');
    }

    public function hapus(Request $request)
    {
        return view('prodi.tampil');
    }
}
