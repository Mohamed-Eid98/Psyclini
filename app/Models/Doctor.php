<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public $table = 'doctors';
    public $fillable = [ 
        'ssn',
        'name',
        'email' , 
        'password',
        'birth_date',
        'img',
        'phone',
        'rating',
        'speciality'
    ];
    public $hidden = ['pivot'];

    public $timestamps = false;
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'doctor_post', 'doctor_ssn' , 'post_id' , 'ssn' , 'id');
    }
  
   /**
    * Get all of the comments for the Doctor
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function articles()
   {
       return $this->hasMany(Article::class, 'doctor_ssn', 'ssn');
   }
   /**
    * The roles that belong to the Doctor
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function patients()
   {
       return $this->belongsToMany(Patient::class, 'doctor_patient', 'doctor_ssn', 'patient_id', 'ssn' , 'id');
   }
}

