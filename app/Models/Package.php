<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    protected $fillable = [
        'destination_id', // ID destinasi yang terkait
        'name',           // Nama paket
        'description',    // Deskripsi paket
        'price',          // Harga paket
        'duration',       // Durasi paket (opsional)
        'image',          // Gambar yang terkait (opsional)
        'slug',
    ];
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
