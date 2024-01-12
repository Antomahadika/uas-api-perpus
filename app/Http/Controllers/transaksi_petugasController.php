<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi_petugas;

class transaksi_petugasController extends Controller
{
    public function index()
    {
        $transaksi_petugas = transaksi_petugas::all();
        return response()->json($transaksi_petugas);
    }

    public function show($id)
    {
        $transaksi_petugas = transaksi_petugas::find($id);
        return response()->json($transaksi_petugas);
    }

    public function store(Request $request)
    {
        $transaksi_petugas = transaksi_petugas::create($request->all());
        return response()->json("Data Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $transaksi_petugas = transaksi_petugas::find($id);
        $transaksi_petugas->update($request->all());
        return response()->json("Data Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $transaksi_petugas = transaksi_petugas::find($id);
        $transaksi_petugas->delete();
        return response()->json("Data Berhasil Dihapus");
    }
}