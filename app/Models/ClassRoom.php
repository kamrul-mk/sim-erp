<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Section;

class ClassRoom extends Model
{
    protected $fillable = [
        'name',
        'code',
        'academic_year_id',
        'capacity',
        'description',
        'status',
    ];

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
