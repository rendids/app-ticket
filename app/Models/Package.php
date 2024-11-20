<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    // Relasi dengan Purchases
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

}
