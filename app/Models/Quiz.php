<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $table = "quizes";

    protected $primaryKey = 'quize_id';

    // protected $fillable = ['name', 'time', 'measure'];

    // public function questions(){
    //     return $this->hasMany(Question::class);
    // }
}
