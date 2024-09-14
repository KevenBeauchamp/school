<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table= "class";
    protected $primaryKey = 'id_class';
    protected $fillable = [
        'name_class',
        'code_class',
    ];
    use HasFactory;
}
