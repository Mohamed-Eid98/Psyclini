<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Secretary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    public $table = 'posts';
    public $fillable = [ 
        'id',
        'title',
        'body' , 
        'status',
        'speciality'
    ];
    public $hidden = ['pivot'];

    /**
     * The roles that belong to the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_post', 'post_id' , 'doctor_ssn' , 'id' , 'ssn');
    }
    /**
     * The roles that belong to the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function secretaries()
    {
        return $this->belongsToMany(Secretary::class, 'post_secretary', 'Post_id', 'secretary_ssn', 'id', 'ssn');
    }
    /**
     * Get all of the comments for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}