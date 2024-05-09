<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration2 extends Model
{
    protected $table = 'registration2';

    protected $fillable = [
        'business_name',
        'about_business',
        'target_fund',
        'phone_number',
        'birth_date',
        'brands',
    ];

    protected $casts = [
        'brands' => 'array',
    ];
}