<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class finalisasi extends Model
{
    protected $table = 'finalisasis';
    protected $primaryKey = 'id_finalisasi';
    use HasFactory;

    public function peserta()
    {
        return $this->belongsTo(peserta::class);
    }
    public function event()
    {
        return $this->belongsTo(event::class);
    }
    public function template()
    {
        return $this->belongsTo(template::class);
    }
}
