<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\CertificateTemplate;

class Certificate extends Model
{
    protected $fillable = [
        'student_id',
        'certificate_template_id',
        'certificate_no',
        'issue_date',
        'pdf_file',
        'is_verified',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function template()
    {
        return $this->belongsTo(CertificateTemplate::class, 'certificate_template_id');
    }
}
