<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'profile_picture' => $this->profile_picture ? asset('storage/' . $this->profile_picture)
                : null,
            'social_links' => $this->social_links ?? []
        ];
    }
}
