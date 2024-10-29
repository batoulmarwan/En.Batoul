<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TownResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type_event_id'=>$this->type_event_id,
           // 'town_id'=>$this->town_id,
            'town_id'=>$this->town?->name,
        ];
}
}