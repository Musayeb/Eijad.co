<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Select_question extends Model
{
    use HasFactory;

    protected $table = 'select_questions';

    protected $primaryKey = 'select_question_id';

    protected $fillable = [
        'number','question_id', 'quiz_id', 'quiz_no', 'author'
    ];
}
