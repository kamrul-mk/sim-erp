<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateTemplate extends Model
{
    protected $fillable = [
        'name',
        'code',
        'content',
        'header_logo',
        'signature',
        'status',
    ];

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
}
