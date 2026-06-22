<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Guardian;

class Student extends Model
{
    public function guardian()
    {
        return $this->belongsTo(Guardian::class);
    }

    protected $fillable = [
        'academic_year_id',
        'class_room_id',
        'section_id',
        'guardian_id',
        'admission_no',
        'roll_no',
        'registration_no',
        'name',
        'name_bn',
        'father_name',
        'mother_name',
        'date_of_birth',
        'gender',
        'blood_group',
        'religion',
        'mobile',
        'email',
        'present_address',
        'permanent_address',
        'birth_certificate_no',
        'nid_no',
        'photo',
        'admission_date',
        'status',
    ];
}
