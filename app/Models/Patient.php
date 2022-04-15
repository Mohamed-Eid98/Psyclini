<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Patient extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $guard = 'patient';
    public $fillable = [
        'name',
        'password',
        'phone',
        'email',
    ];
}
