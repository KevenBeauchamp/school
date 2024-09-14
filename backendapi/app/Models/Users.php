<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table= "user";
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'username',
        'password',
        'role',
    ];
    use HasFactory;
}
