<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $table="transaction";
    protected $fillable=[
'name',
'mob',
'address',
'user_id',
'amount',
'user_role',
'transaction_id',
'transaction_status',
    ];
}

