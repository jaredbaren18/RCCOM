<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class table_appointments extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'app_fname',
        'app_mname',
        'app_lname',
        'app_age',
        'app_gender',
        'app_municipal',
        'app_barangay',
        'app_purpose',
        'app_other_reason',
        'app_date',
        'app_time',
        'app_status',
        'app_reason_decline',
        'app_assisted_by',
        'emp_id_no',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(table_users::class);
        return $this->belongsTo(table_employees::class);
    }
}
