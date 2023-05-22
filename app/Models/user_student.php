<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_student extends Model
{
    use HasFactory;
    protected $table="user_student";
    protected $fillable=[
                        'r_name',
                        'r_current_school_institute',
                        'mob',
                        'address',
		                 'user_id'
                        ];
}
