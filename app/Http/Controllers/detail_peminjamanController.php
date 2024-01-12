<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail_peminjaman;

class detail_peminjamanController extends Controller
{
    public function index()
    {
        $detail_peminjaman = detail_peminjaman::all();
        return response()->json($detail_peminjaman);
    }

    public function show($id)
    {
        $detail_peminjaman = detail_peminjaman::find($id);
        return response()->json($detail_peminjaman);
    }

    public function store(Request $request)
    {
        $detail_peminjaman = detail_peminjaman::create($request->all());
        return response()->json("Data Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $detail_peminjaman = detail_peminjaman::find($id);
        $detail_peminjaman->update($request->all());
        return response()->json("Data Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $detail_peminjaman = detail_peminjaman::find($id);
        $detail_peminjaman->delete();
        return response()->json("Data Berhasil Dihapus");
    }
}