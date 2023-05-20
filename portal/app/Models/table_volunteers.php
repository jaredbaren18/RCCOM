<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_volunteers extends Model
{
    use HasFactory;
    protected $table="table_volunteers";
    protected $fillable=[
        'vol_id_no',
        'vol_id_pic',
        'vol_fname',
        'vol_mname',
        'vol_lname',
        'vol_age',
        'vol_gender',
        'vol_birthday',
        'vol_nationality',
        'vol_civil_status',
        'vol_blood_type',
        'vol_region',
        'vol_province',
        'vol_municipal',
        'vol_barangay',
        'vol_house_no',
        'vol_postal_code',
        'vol_landline',
        'vol_phone_no',
        'vol_email',
        'vol_guardian',
        'vol_relationship',
        'vol_guardian_phone_no',
        'vol_education_attr',
        'vol_studying',
        'vol_school',
        'vol_course',
        'vol_year_level',
        'vol_been_volunteer',
        'vol_been_completed_redcross_seminar',
        'vol_services_like_to_involve',
        'vol_willing_to_donate_blood',
        'vol_day_your_free',
        'vol_time_your_free',
        'vol_long_intent_in_prc',
        'vol_where_get_to_know_volunteering',
        'vol_reason_why_become_volunteer',
    ];
}
