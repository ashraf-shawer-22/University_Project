<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'course_id';

    protected $fillable = ['course_name', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'course_id');
    }

    public function instructors()
    {
        return $this->hasMany(Instructor::class, 'course_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'course_id');
    }
}

