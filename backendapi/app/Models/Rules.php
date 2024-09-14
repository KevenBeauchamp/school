<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{
    protected $table= "classe";
    protected $primaryKey = 'id_classe';
    protected $fillable = [
        'name_class',
        'code_class',
    ];
    use HasFactory;
}
