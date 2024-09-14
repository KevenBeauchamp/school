<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table= "parent";
    protected $primaryKey = 'id_parent';
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
