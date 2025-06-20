<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewKaryawan extends Model
{
    protected $table = 'newkaryawan';
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'nip',
        'nama',
        'pangkat',
        'gaji'
    ];
}
