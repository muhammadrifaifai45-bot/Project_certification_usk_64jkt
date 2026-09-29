<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarSertifikasi extends Model
{
    protected $fillable =[
        'ListSertifikasi',
        'NamaSertifikasi',
        'is_active'
    ];
}
