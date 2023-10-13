<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_data extends Model
{
    protected $fillable = [
        
        'paymentID',
        'trxID',
        'transactionStatus'
    ];
    use HasFactory;
}
