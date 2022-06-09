<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
class Course_topics extends Model
{
    use HasFactory;
    protected $primaryKey="topics_id";

    public function course()
    {
        return $this->belongsTo(Course::class,'topics_id','course_id');

    }
}
