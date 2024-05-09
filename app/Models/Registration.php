<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'full_name',
        'matric_number',
        'gender',
        'address1',
        'address2',
        'country',
        'city',
        'region',
        'postal_code',
    ];
}