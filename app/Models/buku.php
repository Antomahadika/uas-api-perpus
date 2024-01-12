<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class buku extends Model
{
    protected $primaryKey = 'ID_Buku';
    protected $table = 'buku';
    protected $fillable = [
        'ID_Buku', 'Judul', 'Pengarang', 'Tahun_Terbit', 'Jumlah_Stock'
    ];
}