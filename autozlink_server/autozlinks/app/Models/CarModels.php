<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModels extends Model
{
    use HasFactory;

    public function postCars()
    {
        return $this->hasMany(PostCars::class, 'car_model_id');
    }

    public function carBrand()
    {
        return $this->belongsTo(carBrands::class, 'car_brand_id');
    }
}
