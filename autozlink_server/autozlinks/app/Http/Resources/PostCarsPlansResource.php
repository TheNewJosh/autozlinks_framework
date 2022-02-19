<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostCarsPlansResource extends JsonResource
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
            'attributes' => [
                'type' => $this->type,
                'title' => $this->title,
                'price' => $this->price,
                'price_facebook' => $this->price_facebook,
                'price_instagram' => $this->price_instagram,
                'featuring' => $this->featuring,
                'photos' => $this->photos,
                'limit' => $this->limit,
                'expiration_time' => $this->expiration_time,
                'featured_expiration_time' => $this->featured_expiration_time,
                'description' => $this->description,
                'status' => $this->status,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ]
        ];
    }
}
