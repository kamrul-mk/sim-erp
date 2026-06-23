<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamType extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description',
        'status',
    ];

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
