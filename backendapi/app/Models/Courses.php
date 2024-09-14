<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table= "course";
    protected $primaryKey = 'id_course';
    protected $fillable = [
        'name_course',
        'observation',
        'coefficient'
    ];
    use HasFactory;
}
