<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'user_id', 'tour_package_id', 'purchase_date', 'departure_date', 'status', 'total_price', 'payment_status', 'quantity', 'phone'
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan TourPackage
    public function tourPackage()
    {
        return $this->belongsTo(Package::class);
    }

}
