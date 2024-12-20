<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'student_id',
    ];


    public function courses()
   {
    return $this->belongsToMany(Course::class, 'courses_user')
       ->withTimestamps();
    }
    public function user()
{
    return $this->belongsToMany(User::class, 'users_student','student_id', 'user_id');
}
}
