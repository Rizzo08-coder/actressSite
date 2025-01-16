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
        ->take(3)                   // Limita a 3 risultati
        ->get();
    }
}
