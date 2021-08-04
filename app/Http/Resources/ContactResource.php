<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
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
            'id_contact' => $this->id_contact,
            'header_contact' => $this->header_contact,
            'title_contact' => $this->title_contact,
            'description_contact' => $this->description_contact,
        ];
    }
}
