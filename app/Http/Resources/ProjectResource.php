<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'short_description' => $this->short_description,
            'cover_image' => $this->cover_image
                ? asset('storage/' . $this->cover_image)
                : null,
            'stacks' => StackResource::collection($this->whenLoaded('stacks')),
            'project_url' => $this->project_url,
            'repository_url' => $this->repository_url,
        ];
    }
}
