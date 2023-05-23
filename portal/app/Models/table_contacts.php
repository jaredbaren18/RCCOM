<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_contacts extends Model
{
    use HasFactory;
    protected $table="table_contacts";
    protected $fillable=
    [
        'uid',
        'con_fname',
        'con_lname',
    ]
    ;
}
