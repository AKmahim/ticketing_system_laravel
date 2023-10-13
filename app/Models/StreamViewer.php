<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreamViewer extends Model
{
    protected $fillable = [
        'phone_number',
        'email',
        'payment_status',
        'trxID',
        'status',
        'paymentID'
    ];
    use HasFactory;
}
