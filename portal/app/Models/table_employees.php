<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_employees extends Model
{
    use HasFactory;
    protected $fillable=
    [
       'emp_id_no',
       'emp_profile',
       'emp_fname',
       'emp_mname',
       'emp_lname',
        'emp_age',
        'emp_birthday',
       'emp_gender',
       'emp_barangay',
       'emp_municipal',
       'emp_zipcode',
       'emp_contact_no',
       'emp_email',
       'emp_position',
       'emp_department',
       'emp_password',
        'remember_token',
       'type' 
    ];
}
