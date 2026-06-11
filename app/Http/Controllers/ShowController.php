<?php

namespace App\Http\Controllers;

use App\Models\DataLayer;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function getShows(){
        $dl = new DataLayer();
        $show_list = $dl->listShows();

        // Spettacolo in copertina: definito in resources/views/show/featured.json
        // (scrivi lì il titolo dello spettacolo da mettere grande in apertura).
        $featured = null;
        $filePath = resource_path('views/show/featured.json');
        if (file_exists($filePath)) {
            $data = json_decode(file_get_contents($filePath), true);
            $name = trim($data['featured'] ?? '');
            if ($name !== '') {
                $featured = $show_list->first(function ($show) use ($name) {
                    return mb_strtolower(trim($show->title)) === mb_strtolower($name);
                });
            }
        }

        // Fallback: se non trovato (o JSON vuoto/assente) usa il primo spettacolo.
        if (!$featured) {
            $featured = $show_list->first();
        }

        // Gli altri spettacoli, esclusa la copertina.
        $others = $featured
            ? $show_list->reject(fn ($show) => $show->id === $featured->id)->values()
            : $show_list;

        return view('show', compact('show_list', 'featured', 'others'));
    }

    public function show($name){
        $dl = new DataLayer();
        if (!($dl->nameShowExists($name))) {
            abort(404);
        }
        $show = $dl->getShowByTitle($name);

        // Prossime date di questo spettacolo (relazione show -> eventi).
        $events = $show->events()
            ->where('data', '>=', now()->toDateString())
            ->orderBy('data', 'asc')
            ->get();

        return view('singleshow', compact('show', 'events'));
    }

}
