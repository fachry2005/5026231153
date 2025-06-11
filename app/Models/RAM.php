<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAM extends Model
{
    use HasFactory;

    // (opsional, hanya jika tabel bernama 'ram')
    protected $table = 'ram';

    // Field yang boleh diisi (mass assignment)
    protected $fillable = [
        'merkRAM',
        'hargaRAM',
        'tersedia',
        'berat',
    ];
}
