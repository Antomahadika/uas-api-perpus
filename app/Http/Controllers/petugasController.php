<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\petugas;

class petugasController extends Controller
{
    public function index()
    {
        $petugas = petugas::all();
        return response()->json($petugas);
    }

    public function show($id)
    {
        $petugas = petugas::find($id);
        return response()->json($petugas);
    }

    public function store(Request $request)
    {
        $petugas = petugas::create($request->all());
        return response()->json("Data Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $petugas = petugas::find($id);
        $petugas->update($request->all());
        return response()->json("Data Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $petugas = petugas::find($id);
        $petugas->delete();
        return response()->json("Data Berhasil Dihapus");
    }
}