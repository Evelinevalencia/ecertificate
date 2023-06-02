<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    protected $table = 'pesertas';
    protected $primaryKey = 'id_peserta';
    use HasFactory;
    protected $fillable = [
        'id_peserta',
        'nama_lengkap'
    ];
}
