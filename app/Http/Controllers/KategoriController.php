<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('prodi.tampil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpan(Request $request)
    {
        //
        $simpan = true;
        
        if($simpan) {
            return redirect('/prodi');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapus(string $id)
    {
        //
    }
}
