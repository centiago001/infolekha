<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_detail extends Model
{
    use HasFactory;
    protected $table="student_detail";
    protected $fillable = [
                            'name',
                            'class',
                            'mob',
                            'email',
                            'address',
                            'state',
                            'city',
                            'pin_code',
                            'image',
                            'user_student_id'
                        ];

}
