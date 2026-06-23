<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IDCard extends Model
{
    protected $fillable = [
        'card_no',
        'student_id',
        'teacher_id',
        'guardian_id',
        'issue_date',
        'expiry_date',
        'qr_code',
        'photo',
        'status',
    ];
}
