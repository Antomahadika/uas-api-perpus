<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class peminjaman extends Model
{
    protected $primaryKey = 'ID_Peminjaman';
    protected $table = 'peminjaman';
    protected $fillable = [
        'ID_Peminjaman', 'ID_Anggota', 'Tanggal_Peminjaman', 'Tanggal_Pengembalian', 'Status_Pengembalian'
    ];
}