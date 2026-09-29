<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class daftarpeserta extends Model
{
    protected $fillable = [
        'certification_list_id',
        'nama_peserta',
        'nik',
        'gender',
        'alamat',
        'surat_image',
    ];

    public function CertificationList(){
        return $this->belongsTo(CertificationList::class);
    }
}
