<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'employee_id',
        'name',
        'name_bn',
        'father_name',
        'mother_name',
        'date_of_birth',
        'gender',
        'blood_group',
        'religion',
        'mobile',
        'alternative_mobile',
        'email',
        'present_address',
        'permanent_address',
        'designation',
        'joining_date',
        'salary',
        'nid_no',
        'education_qualification',
        'photo',
        'status',
    ];
}
