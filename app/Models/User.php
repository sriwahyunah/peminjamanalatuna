<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'username',
        'password',
        'role',
        'nim',
        'no_hp',
        'alamat'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}