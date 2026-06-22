<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentFee extends Model
{
    protected $fillable = [
        'student_id',
        'fee_type_id',
        'invoice_no',
        'amount',
        'discount',
        'fine',
        'paid_amount',
        'due_amount',
        'fee_date',
        'due_date',
        'payment_status',
        'payment_method',
        'remarks',
    ];
}
