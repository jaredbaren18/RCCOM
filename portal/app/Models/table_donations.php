<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_donations extends Model
{
    use HasFactory;
    protected $table="table_donations";
    protected $fillable=
    [
        'don_fname',
        'don_mname',
        'don_lname',
        'don_age',
        'don_gender',
        'don_municipal',
        'don_barangay',
        'don_notes',
        'don_amount',
        'don_method',
        'don_email',
        'don_proof',
    ]
    ;
}
