<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NE extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ne_id',
    ];
}
