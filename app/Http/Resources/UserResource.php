<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
          'money' => $this->money,
          'weight' => $this->weight,
          'age' => $this->age,
          'energy' => $this->energy,
          'health' => $this->health,
          'hungry' => $this->hungry,
          'power' => $this->power,
          'intellect' => $this->intellect,
          'lucky' => $this->lucky,
          'dirty' => $this->dirty,
          'drivecategory' => $this->drivecategory,
          'profession' => $this->profession,
        ];
    }
}
