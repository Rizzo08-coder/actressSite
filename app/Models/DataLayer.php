<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataLayer extends Model
{
    public function listShows(){
        return Show::all();
    }

    public function listEvents(){
        return Event::where('data', '>=', now()->toDateString()) // Filtra gli eventi futuri
        ->orderBy('data', 'asc')    // Ordina per data crescente
        ->get();
    }

    public function listNext3Events(){
        return Event::where('data', '>=', now()->toDateString()) // Filtra gli eventi futuri
        ->orderBy('data', 'asc')    // Ordina per data crescente
        ->take(5)                   // Limita a 3 risultati
        ->get();
    }

    public function nameShowExists($name){
        $num_show=Show::where('title',$name)->count();
        if($num_show == 0)
            return false;
        return true;
    }

    public function getShowByTitle($name){
        return Show::where('title',$name)->first();
    }
}
