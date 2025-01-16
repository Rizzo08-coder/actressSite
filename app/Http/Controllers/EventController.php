<?php

namespace App\Http\Controllers;

use App\Models\DataLayer;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getEvents(){
        $dl = new DataLayer();
        $event_list = $dl->listEvents();
        return view('eventi', compact('event_list'));
    }
}
