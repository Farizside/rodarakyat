<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'user_id', 'car_id', 'duration', 'total', 'time_start', 'time_end', 'payment_proof'];
}
