<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculties extends Model
{
    use HasFactory;
    protected $table="facultiess";
    protected $fillable=['faculti'];
}
