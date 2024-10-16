<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionAssignment extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function assignment()
    {
        return $this->belongsTo(Assignment::class, 'Assignment_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'Student_id');
    }
}
