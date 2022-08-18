<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reports extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'oximeter_reading',
        'body_temperature',
        'suger_level',
        'bp'
    ];
}
