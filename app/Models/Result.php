<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Exam;

class Result extends Model
{
    protected $fillable = [
        'student_id',
        'exam_id',
        'total_marks',
        'gpa',
        'grade',
        'position',
        'result_status',
        'published',
        'remarks',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
