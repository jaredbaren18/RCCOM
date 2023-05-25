<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_rtc extends Model
{
    use HasFactory;
    protected $table="table_rtc";
    protected $fillable=[
        'u_id',
        'sendby',
        'chat_fname',
        'chat_mname',
        'message',
        'status',
    ];

   
}

