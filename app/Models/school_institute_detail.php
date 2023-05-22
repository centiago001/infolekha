<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school_institute_detail extends Model
{
    use HasFactory;
    protected $table="school_institute_detail";
    protected $fillable=[
        'logo',
		'subscription_status',
        'entity_name',
		'entity_select',
        'address',
        'about',
        'pin_code',
        'oprating_since',
        'registration_no',
        'mob',
        'email',
        'website',
        'fb',
        'insta',
        'google',
        'yt',
        
        'course',
        'opening_time',
        'closing_time',
        'facilities',
        'image',
        'video',
        'user_id' ];
}
