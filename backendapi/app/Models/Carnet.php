<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carnet extends Model
{
    protected $table= "carnet";
    protected $primaryKey = 'id_carnet';
    protected $fillable = [
        'moyenne',
        'id_student'
    ];
    use HasFactory;
}
