<?php

namespace App\Http\Controllers;

use App\Http\Resources\VenueResource;
use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    private $venueModel;

    public function __construct()
    {
        $this->venueModel = new Venue();
    }

    public function index(Request $request)
    {
        $getVenues = $this->venueModel;
        if($request->id){
            $getVenues = $getVenues->where('id',$request->id);
        }
        $getVenues= $getVenues->get();
        return VenueResource::collection($getVenues);
    }

    public function show($id){
        $getVenues = $this->venueModel->find($id);
        return new VenueResource($getVenues);
    }
}
