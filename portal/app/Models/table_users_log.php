<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_users_log extends Model
{
    use HasFactory;
    protected $table='table_users_log';
    protected $fillable=[
        'content'
    ];
}
