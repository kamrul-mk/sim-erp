<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeType extends Model
{
    protected $fillable = [
        'name',
        'code',
        'default_amount',
        'description',
        'status',
    ];
}
