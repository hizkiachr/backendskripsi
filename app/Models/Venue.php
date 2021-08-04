<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'venue_picture',
        'venue_name',
        'venue_location',
        'venue_street',
        'venue_address1',
        'venue_address2',
        'venue_price',
        'venue_capacity',
        'venue_roomspace',
        'venue_description',
        'venue_facility_list',
        'venue_kind',
        'venue_socmed1',
        'venue_socmed2',
        'venue_website',
        'venue_contact',
        'venue_decoration',
    ];

    public function venue_banners(){
        return $this->hasMany(VenueBanner::class,'venue_id');
    }
}
