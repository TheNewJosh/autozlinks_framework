<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostCarsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type' => 'Post Car',
            'attributes' => [
                'user' => new UsersResource($this->user),
                'car_category' => new CarCategorysResource($this->carCategory),
                'car_fuel_type' => new CarFuelTypesResource($this->carFuelType),
                'car_brand' => new CarBrandsResource($this->carBrand),
                'car_model' => new CarModelsResource($this->carModel),
                'car_condition' => new CarConditionsResource($this->carCondition),
                'car_transmission' => new CarTransmissionsResource($this->carTransmission),
                'mileage' => $this->mileage,
                'price' => $this->price,
                'title' => $this->title,
                'phone' => $this->phone, 
                'email' => $this->email,
                'payment_status' => $this->payment_status, 
                'featured' => $this->featured, 
                'register' => $this->register, 
                'negotiable' => $this->negotiable, 
                'facebook_ads' => $this->facebook_ads, 
                'instagram_ads' => $this->instagram_ads, 
                'post_cars_plan' => new PostCarsPlansResource($this->postCarsPlan), 
                'image' => $this->image, 
                'color' => $this->color, 
                'vin_number' => $this->vin_number, 
                'city' => $this->city, 
                'state' => $this->state, 
                'country' => $this->country, 
                'year' => $this->year, 
                'reference' => $this->reference, 
                'status' => $this->status,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ]
        ];
    }
}
