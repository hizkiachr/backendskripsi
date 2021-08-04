<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContactResource;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    public function index(Request $request)
    {
        $getContacts = $this->contactModel;
        if($request->id){
            $getContacts = $getContacts->where('id',$request->id);
        }
        $getContacts= $getContacts->get();
        return ContactResource::collection($getContacts);
    }
}
