<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    protected $fillable = [
        'guardian_name',
        'father_name',
        'mother_name',
        'mobile',
        'alternative_mobile',
        'email',
        'occupation',
        'monthly_income',
        'nid_no',
        'present_address',
        'permanent_address',
        'photo',
        'status',
    ];
}
