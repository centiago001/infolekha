<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegelistingEnquiry extends Model
{
    use HasFactory;
    protected $table="college_listing_send_enquiry";
    protected $fillable=['name','email','mobile_no','message'];
}
