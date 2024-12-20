<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    use HasFactory;

    protected $fillable = ['course_name', 'course_code','credit_hours'];


    public function users()
{
    return $this->belongsToMany(User::class, 'courses_user','course_id', 'user_id');

}
public function students()
{
    return $this->belongsToMany(User::class, 'courses_user', 'course_id', 'user_id');
}
}
