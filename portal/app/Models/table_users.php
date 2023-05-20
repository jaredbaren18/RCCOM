<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class table_users extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'user_fname',
        'user_mname',
        'user_lname',
        'user_age',
        'user_birthday',
        'user_gender',
        'barangay',
        'municipal',
        'user_email',
        'user_password',
        'user_account_status',
        'token',
        'type',
    ];
    // public function appointment()
    // {
    //     return $this->hasMany(table_appointments::class);
    // }
}
