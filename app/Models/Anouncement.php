<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anouncement extends Model
{
    use HasFactory;
    protected $table="announcements";
    protected $fillable=['city_id','date','announcement','announcement_image'];

}
