<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Package;

class Destination extends Model
{
    public function package()
    {
        return $this->hasMany(Package::class);
    }


}
