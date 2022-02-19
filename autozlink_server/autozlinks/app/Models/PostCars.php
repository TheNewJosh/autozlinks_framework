<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCars extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function carCategory()
    {
        return $this->belongsTo(carCategorys::class, 'car_category_id');
    }
    public function carFuelType()
    {
        return $this->belongsTo(carFuelTypes::class, 'car_fuel_type_id');
    }
    public function carBrand()
    {
        return $this->belongsTo(carBrands::class, 'car_brand_id');
    }
    public function carModel()
    {
        return $this->belongsTo(carModels::class, 'car_model_id');
    }
    public function carCondition()
    {
        return $this->belongsTo(carConditions::class, 'car_condition_id');
    }
    public function carTransmission()
    {
        return $this->belongsTo(carTransmissions::class, 'car_transmission_id');
    }
    public function postCarsPlan()
    {
        return $this->belongsTo(postCarsPlans::class, 'post_cars_plan_id');
    }
}
