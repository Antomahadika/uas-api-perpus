<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class transaksi_petugas extends Model
{
    protected $primaryKey = 'ID_Transaksi';
    protected $table = 'transaksi_petugas';
    protected $fillable = [
        'ID_Transaksi', 'ID_Petugas', 'ID_Peminjaman', 'Tanggal_Transaksi'
    ];
}