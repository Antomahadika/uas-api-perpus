<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;

class peminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = peminjaman::all();
        return response()->json($peminjaman);
    }

    public function show($id)
    {
        $peminjaman = peminjaman::find($id);
        return response()->json($peminjaman);
    }

    public function store(Request $request)
    {
        $peminjaman = peminjaman::create($request->all());
        return response()->json("Data Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $peminjaman = peminjaman::find($id);
        $peminjaman->update($request->all());
        return response()->json("Data Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $peminjaman = peminjaman::find($id);
        $peminjaman->delete();
        return response()->json("Data Berhasil Dihapus");
    }
}