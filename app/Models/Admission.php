<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = [
        'academic_year_id',
        'class_room_id',
        'section_id',
        'application_no',
        'student_name',
        'student_name_bn',
        'father_name',
        'mother_name',
        'date_of_birth',
        'gender',
        'mobile',
        'email',
        'present_address',
        'permanent_address',
        'birth_certificate_no',
        'photo',
        'status',
        'remarks',
        'approved_at',
    ];
}
