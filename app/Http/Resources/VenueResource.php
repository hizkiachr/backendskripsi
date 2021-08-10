<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VenueResource extends JsonResource
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
            'id' => $this->id,
            'venue_picture' => $this->venue_picture,
            'venue_name' => $this->venue_name,
            'venue_location' => $this->venue_location,
            'venue_street' => $this->venue_street,
            'venue_address1' => $this->venue_address1,
            'venue_address2' => $this->venue_address2,
            'venue_price' => $this->venue_price,
            'venue_capacity' => $this->venue_capacity,
            'venue_roomspace' => $this->venue_roomspace,
            'venue_description' => $this->venue_description,
            'venue_facility_list' => $this->venue_facility_list,
            'venue_kind'=> $this->venue_kind,
            'venue_socmed1' => $this->venue_socmed1,
            'venue_socmed2' => $this->venue_socmed2,
            'venue_socmed3' => $this->venue_socmed3,
            'venue_website' => $this->venue_website,
            'venue_contact' => $this->venue_contact,
            'venue_decoration' => $this->venue_decoration,
            'venue_banners' => VenueBannerResource::collection($this->venue_banners),
        ];
    }
}
