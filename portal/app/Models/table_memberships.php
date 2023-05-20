<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_memberships extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'mem_id',
        'mem_id_no',
        'mem_fname',
        'mem_mname',
        'mem_lname',
        'mem_age',
        'mem_gender',
        'mem_birthday',
        'mem_barangay',
        'mem_municipal',
        'mem_zipcode',
        'mem_blood_type',
        'mem_contact_no',
        'mem_email',
        'mem_payment_method',
        'mem_proof_payment',
        'mem_status',
        'mem_category',
        'mem_price',
        'mem_reason_decline',
        'mem_assisted_by',
        'mem_start_at',
        'mem_end_at'
    ];
}
