<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutor_detail extends Model
{
    use HasFactory;
    protected $table='tutor_detail';
    protected $fillable=[
        'name',
        'subject',
        'experiance',
        'mob',
        'job_type',
        'email',
        'address',
        'pin_code',
        'declaration',
        'user_id',
        'subscription_status',
        'activate'];
        
}
