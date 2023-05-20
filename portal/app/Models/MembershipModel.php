<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipModel extends Model
{
    use HasFactory;

    protected $table = 'usermembership';

    protected $fillable = [
        'first_name',
        'last_name',
        'barangay',
        'municipal',
        'zip_code',
        'phone_number',
        'email',
        'birthday',
        'gender',
        'blood_type',
        'category',
        'payment_method',
        'status',
    ];
}
