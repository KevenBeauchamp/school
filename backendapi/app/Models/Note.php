<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table= "course_student";
    protected $primaryKey = 'id_course_student';
    protected $fillable = [
        'notes',
    ];
    
    use HasFactory;
}
