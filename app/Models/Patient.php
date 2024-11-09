<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes; // Use SoftDeletes here
    protected $fillable = [
        'name',
        'phone',
        'email',
        'type_of_disease',
        'payment',
        'due_payment',
        'total_payment',
        'doctor_fee',
        'case_details',
        'image',
        'gallery',
        'next_schedule_date',
        'doctor_name',
    ];

    protected $casts = [
        'gallery' => 'array',
        'next_schedule_date' => 'date',
    ];
}
