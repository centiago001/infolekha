<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classsses extends Model
{
    use HasFactory;
    protected $table="classss";
    protected $fillable=['class'];
}
