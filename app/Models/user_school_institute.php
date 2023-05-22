<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_school_institute extends Model
{
    use HasFactory;
    protected $table="user_school_institute";
    protected $fillable=[
		                'r_entity',
                        'r_name',
                        'r_contact_person',
                        'r_mob',
               
                        'address',
                        
		               'user_id',
                        ];
}
