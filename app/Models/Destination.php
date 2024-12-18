<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Package;

class Destination extends Model
{

    protected $fillable = [
        'name',
        'description',
        'location',
        'image',
        'slug'
    ];

    public function package()
    {
        return $this->hasMany(Package::class);
    }
}
