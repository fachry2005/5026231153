<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $primaryKey = 'kodepegawai';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kodepegawai',
        'namalengkap',
        'divisi',
        'departemen'
    ];
}
