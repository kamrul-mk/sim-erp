<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'code',
        'type',
        'full_marks',
        'pass_marks',
        'subject_order',
        'description',
        'status',
    ];
}
