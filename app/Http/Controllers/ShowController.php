<?php

namespace App\Http\Controllers;

use App\Models\DataLayer;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function getShows(){
        $dl = new DataLayer();
        $show_list = $dl->listShows();
        return view('show',compact('show_list'));
    }
}
