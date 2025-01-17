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

    public function show($name){
        $dl = new DataLayer();
        if (!($dl->nameShowExists($name))) {
            abort(404);
        }
        $show = $dl->getShowByTitle($name);
        return view('singleshow',compact('show'));
    }

}
