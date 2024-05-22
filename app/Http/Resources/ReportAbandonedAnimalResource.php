<?php

namespace App\Http\Resources;

use App\Constants\ReportAbandonedAnimal\{ReportAbandonedAnimalStatus, AbandonmentStatus};
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReportAbandonedAnimalResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
            'status' => ReportAbandonedAnimalStatus::getTextByCode($this->status),
            'abandonment_location' => $this->abandonment_location,
            'abandonment_status' => AbandonmentStatus::getTextByCode($this->abandonment_status),
            'abandonment_date' => $this->abandonment_date,
            'report_date' => $this->report_date,
            'alert' => $this->alert,
            'rescue_date' => $this->rescue_date,
            'rescue_observations' => $this->rescue_observations,
            'response_time' => $this->response_time,
            'animals' => AnimalResource::collection($this->animals)
        ];
    }
}
