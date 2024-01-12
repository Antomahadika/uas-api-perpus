<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class petugas extends Model
{
    protected $primaryKey = 'ID_Petugas';
    protected $table = 'petugas';
    protected $fillable = [
        'ID_Petugas', 'Nama_Petugas', 'Jabatan'
    ];
}