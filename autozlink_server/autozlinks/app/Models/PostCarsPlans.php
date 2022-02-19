<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCarsPlans extends Model
{
    use HasFactory;

    public function postCars()
    {
        return $this->hasMany(PostCars::class, 'post_cars_plan_id');
    }
}
