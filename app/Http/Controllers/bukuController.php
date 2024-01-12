<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class bukuController extends Controller
{
    public function index()
    {
        $buku = buku::all();
        return response()->json($buku);
    }

    public function show($id)
    {
        $buku = buku::find($id);
        return response()->json($buku);
    }

    public function store(Request $request)
    {
        $buku = buku::create($request->all());
        return response()->json("Data Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $buku = buku::find($id);
        $buku->update($request->all());
        return response()->json("Data Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $buku = buku::find($id);
        $buku->delete();
        return response()->json("Data Berhasil Dihapus");
    }
}