<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctorPost extends Model
{
    use HasFactory;
    public $table = 'doctor_post'; 
    public $timestamps = false;
}