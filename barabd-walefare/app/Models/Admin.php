<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class Admin extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $guard = 'admin';
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'type',
        'status',
        'image',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}

