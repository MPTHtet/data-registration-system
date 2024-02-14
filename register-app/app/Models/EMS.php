<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EMS extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ems_id',
    ];
}
