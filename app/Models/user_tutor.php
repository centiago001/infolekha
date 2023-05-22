<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_tutor extends Model
{
    use HasFactory;
    protected $table="user_tutor";
    protected $fillable=[
                        'r_name',
                        'mob',
                        'user_id',            
                        'address',
                      
                        ];
}
