<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_about' => $this->id_about,
            'header_about' => $this->header_about,
            'title_about' => $this->title_about,
            'description_about' => $this->description_about,
        ];
    }
}
