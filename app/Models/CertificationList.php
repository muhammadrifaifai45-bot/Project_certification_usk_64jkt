<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificationList extends Model
{
    protected $fillable = [
        'daftar_sertifikasi',
        'code',
        'is_active'
    ];
}
