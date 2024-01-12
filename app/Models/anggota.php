<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class anggota extends Model
{
    protected $primaryKey = 'ID_Anggota';
    protected $table = 'anggota';
    protected $fillable = [
        'ID_Anggota', 'Nama', 'Alamat', 'Nomor_Telepon'
    ];
}