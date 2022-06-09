<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certification extends Model
{
    use HasFactory;

    protected $table = "certifications";

    protected $primaryKey = "certification_id";

    protected $fillable = [
        'courese_id', 'user_id', 'certificate_no'
    ];
}
