<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificationCode extends Model
{
    protected $fillable = [
        'daftarpeserta_id',
        'certification_code',
        'status'
    ];

    public function DaftarPeserta(){
        return $this->belongsTo(daftarpeserta::class);
    }
    
}

