<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AcademicYear;
use App\Models\ExamType;
use App\Models\Mark;

class Exam extends Model
{
    protected $fillable = [
        'academic_year_id',
        'exam_type_id',
        'name',
        'start_date',
        'end_date',
        'total_marks',
        'pass_marks',
        'result_published',
        'description',
    ];

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function examType()
    {
        return $this->belongsTo(ExamType::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }
}
