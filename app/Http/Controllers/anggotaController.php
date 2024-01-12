<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anggota;

class anggotaController extends Controller
{
    public function index()
    {
        $anggota = anggota::all();
        return response()->json($anggota);
    }

    public function show($id)
    {
        $anggota = anggota::find($id);
        return response()->json($anggota);
    }

    public function store(Request $request)
    {
        $anggota = anggota::create($request->all());
        return response()->json("Data Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $anggota = anggota::find($id);
        $anggota->update($request->all());
        return response()->json("Data Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $anggota = anggota::find($id);
        $anggota->delete();
        return response()->json("Data Berhasil Dihapus");
    }
}