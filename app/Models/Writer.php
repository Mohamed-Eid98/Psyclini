<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Writer extends Authenticable
{
    use HasFactory;
    use Notifiable;
    protected $guard = 'Writer';

    protected $fillable = [
        'name' , 'password', 'email'
    ];
}