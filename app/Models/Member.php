<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Member extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'member';

    protected $fillable = [
        'username',
        'password',
        'name',
        'email',
        'phone',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
}
