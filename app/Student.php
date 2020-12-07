<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'fullname', 
        'dob', 
        'student_no', 
        'user_id', 
        'gender', 
        'address', 
    ];

}
