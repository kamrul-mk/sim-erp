<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IDCardTemplate extends Model
{
    protected $fillable = [
        'name',
        'code',
        'card_type',
        'logo',
        'background_image',
        'signature',
        'header_text',
        'footer_text',
        'show_qr',
        'status',
    ];
}
