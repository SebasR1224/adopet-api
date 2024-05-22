<?php

namespace App\Http\Resources;

use App\Constants\Animal\AnimalStatus;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
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
            'image' => $this->image,
            'description' => $this->description,
            'age' => $this->age,
            'coat_color' => $this->coat_color,
            'especie' => $this->especie,
            'race' => $this->race,
            'weight' => $this->weight,
            'status' => AnimalStatus::getTextByCode($this->status),
            'gender' => $this->gender
        ];
    }
}
