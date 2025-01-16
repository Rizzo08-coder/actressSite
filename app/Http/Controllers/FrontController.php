<?php

namespace App\Http\Controllers;

use App\Models\DataLayer;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function getHome(){
        $dl = new DataLayer();
        $event_list = $dl->listNext3Events();
        return view('index',compact('event_list'));
    }
}
