<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutResource;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $aboutModel;

    public function __construct()
    {
        $this->aboutModel = new About();
    }

    public function index(Request $request)
    {
        $getAbouts = $this->aboutModel;
        if($request->id){
            $getAbouts = $getAbouts->where('id',$request->id);
        }
        $getAbouts= $getAbouts->get();
        return AboutResource::collection($getAbouts);
    }
}
