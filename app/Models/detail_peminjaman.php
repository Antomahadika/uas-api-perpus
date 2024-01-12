<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class detail_peminjaman extends Model
{
    protected $primaryKey = 'ID_Detail_Peminjaman';
    protected $table = 'detail_peminjaman';
    protected $fillable = [
        'ID_Detail_Peminjaman', 'ID_Peminjaman', 'ID_Buku', 'Jumlah_Peminjaman'
    ];
}