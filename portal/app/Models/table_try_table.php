<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_try_table extends Model
{
    use HasFactory;
    protected $table="table_try";
    protected $fillable=['tryfile'];
}
