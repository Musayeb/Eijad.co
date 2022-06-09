<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course_topics;

class Course extends Model
{
    use HasFactory;
    protected $primaryKey="course_id";

    public function coursetopics(){
        return $this->hasMany(Course_topics::class,'course_id','course_id');
    }
}
