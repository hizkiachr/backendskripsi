<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenueBanner extends Model
{
    use HasFactory;

    protected $fillable = [
        'venue_id',
        'venue_image'
    ];

    public function venue(){
        return $this->belongsTo(Venue::class,'venue_id');
    }
}
