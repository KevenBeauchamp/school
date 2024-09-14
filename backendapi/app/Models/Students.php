<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table= "student";
    protected $primaryKey = 'id_student';
    protected $fillable = [
       'last_name',
        'first_name',
        'birthday',
        'sexe',
        'adress',
        'city',
        'tel',
        'email',
    ];
    use HasFactory;
}
