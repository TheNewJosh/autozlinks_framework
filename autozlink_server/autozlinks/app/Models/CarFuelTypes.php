<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFuelTypes extends Model
{
    use HasFactory;

    public function postCars()
    {
        return $this->hasMany(PostCars::class, 'car_fuel_type_id');
    }
}
