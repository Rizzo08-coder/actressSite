<?php

namespace App\Http\Controllers;

use App\Models\DataLayer;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function getHome(){
        $dl = new DataLayer();
        $event_list = $dl->listNext3Events();
        $show_list = $dl->listShows();

        // Anteprima spettacoli in home: titoli (e ordine) definiti in
        // resources/views/show/featured.json -> "home_preview".
        $home_shows = collect();
        $filePath = resource_path('views/show/featured.json');
        if (file_exists($filePath)) {
            $data = json_decode(file_get_contents($filePath), true);
            foreach (($data['home_preview'] ?? []) as $name) {
                $name = trim($name);
                if ($name === '') {
                    continue;
                }
                $match = $show_list->first(function ($show) use ($name) {
                    return mb_strtolower(trim($show->title)) === mb_strtolower($name);
                });
                if ($match && !$home_shows->contains('id', $match->id)) {
                    $home_shows->push($match);
                }
            }
        }

        // Fallback: se nessun titolo è indicato o trovato, usa i primi 4.
        if ($home_shows->isEmpty()) {
            $home_shows = $show_list->take(4)->values();
        }

        return view('index', compact('event_list', 'show_list', 'home_shows'));
    }
}
