<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'grade_name',
        'gpa',
        'mark_from',
        'mark_to',
        'remarks',
        'status',
    ];
}
