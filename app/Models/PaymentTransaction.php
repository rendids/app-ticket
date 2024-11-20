<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentTransaction extends Model
{
    protected $fillable = [
        'purchase_id', 'amount', 'payment_method', 'payment_status', 'payment_date'
    ];

    // Relasi dengan Purchase
    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }

}
