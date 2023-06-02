<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class template extends Model
{
    protected $table = 'templates';
    protected $primaryKey = 'id_template';
    use HasFactory;
}
