<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Show;
use Illuminate\Database\Seeder;

class ShowEventSeeder extends Seeder
{
    /**
     * Dati di prova ispirati a paolarizzi.info (Paola Rizzi - "Signora Maria").
     */
    public function run(): void
    {
        $shows = [
            [
                'title' => 'NON VOGLIO MICA LA LUNA',
                'short_description' => 'Il monologo comico in dialetto bresciano della Signora Maria.',
                'description' => "La Signora Maria si racconta tra ricordi, sogni mai realizzati e battute fulminanti. Un monologo brillante in dialetto bresciano che, tra una risata e l'altra, parla della vita di tutti i giorni, della famiglia e di una donna che, in fondo, non vuole mica la luna.",
                'directed_by' => 'Paola Rizzi',
                'collaboration' => 'Compagnia La Signora Maria',
                'img_url' => '/img/show/show1737217200.png',
            ],
            [
                'title' => 'NON SONO UNA SIGNORA',
                'short_description' => 'Risate e ironia con la Signora Maria sul palco.',
                'description' => "Tra equivoci, ricordi e ironia tagliente, la Signora Maria smonta i luoghi comuni sulle \"vere signore\". Uno spettacolo comico che mette in scena la quotidianità con leggerezza e tempi comici impeccabili.",
                'directed_by' => 'Paola Rizzi',
                'collaboration' => 'Compagnia La Signora Maria',
                'img_url' => '/img/show/show1737291644.jpg',
            ],
            [
                'title' => 'UNA VITA SPERICOLATA',
                'short_description' => 'La Signora Maria racconta una vita tutt\'altro che tranquilla.',
                'description' => "Una carrellata di avventure, disavventure e ricordi raccontati dalla Signora Maria con il suo inconfondibile dialetto bresciano. Un monologo travolgente dove ogni episodio diventa occasione di risata.",
                'directed_by' => 'Paola Rizzi',
                'collaboration' => 'Compagnia La Signora Maria',
                'img_url' => '/img/show/show1737292180.png',
            ],
            [
                'title' => 'TUTTA COLPA DEL PIERO',
                'short_description' => 'Le disavventure della Signora Maria... e del suo Piero.',
                'description' => "Tra litigi domestici, vicini impiccioni e un marito immancabilmente colpevole di tutto, la Signora Maria porta in scena la comicità della vita coniugale. Uno spettacolo dove il Piero, pur restando dietro le quinte, è il vero protagonista.",
                'directed_by' => 'Paola Rizzi',
                'collaboration' => 'Compagnia La Signora Maria',
                'img_url' => '/img/show/show1737907208.jpg',
            ],
            [
                'title' => 'AHI MARIA!',
                'short_description' => 'Un irresistibile concentrato di comicità bresciana.',
                'description' => "La Signora Maria alle prese con le piccole grandi tragedie quotidiane. Un monologo in dialetto bresciano fatto di battute fulminanti e situazioni paradossali, che strappa risate dalla prima all'ultima riga.",
                'directed_by' => 'Paola Rizzi',
                'collaboration' => 'Compagnia La Signora Maria',
                'img_url' => '/img/show/show1737907287.jpg',
            ],
            [
                'title' => "BELLA SENZ'ANIMA",
                'short_description' => 'La Signora Maria rilegge in chiave comica un grande classico.',
                'description' => "Ispirandosi liberamente alle canzoni e ai personaggi di un tempo, la Signora Maria costruisce un monologo tenero e graffiante insieme. Tra musica, ricordi e ironia, uno spettacolo che diverte e fa riflettere.",
                'directed_by' => 'Paola Rizzi',
                'collaboration' => 'Compagnia La Signora Maria',
                'img_url' => '/img/show/show1737907580.webp',
            ],
            [
                'title' => 'LIBERA USCITA',
                'short_description' => 'La Signora Maria si concede una serata tutta sua.',
                'description' => "Cosa succede quando la Signora Maria decide di prendersi una libera uscita? Un monologo comico in dialetto bresciano fatto di racconti, confidenze e battute irresistibili, perfetto anche per le RSA e le feste di paese.",
                'directed_by' => 'Paola Rizzi',
                'collaboration' => 'Compagnia La Signora Maria',
                'img_url' => '/img/show/show1737907780.jpg',
            ],
            [
                'title' => 'CHE BÈL NADAL, SIURA MARIA!',
                'short_description' => 'Lo spettacolo natalizio della Signora Maria.',
                'description' => "Tra addobbi, pranzi infiniti e parenti immancabili, la Signora Maria racconta il Natale come solo lei sa fare. Un monologo in dialetto bresciano che porta in scena l'atmosfera, le tradizioni e le piccole follie delle feste.",
                'directed_by' => 'Paola Rizzi',
                'collaboration' => 'Compagnia La Signora Maria',
                'img_url' => '/img/show/show1737908003.jpg',
            ],
            [
                'title' => 'PAESE MIO CHE STAI SULLA COLLINA',
                'short_description' => 'Un viaggio comico e nostalgico nel paese della Signora Maria.',
                'description' => "La Signora Maria racconta il suo paese sulla collina: i personaggi, le storie e le tradizioni di una comunità che vive di piccole cose. Un monologo in dialetto bresciano che alterna risate e momenti di tenera nostalgia.",
                'directed_by' => 'Paola Rizzi',
                'collaboration' => 'Compagnia La Signora Maria',
                'img_url' => '/img/show/show1737908147.webp',
            ],
        ];

        $showsByTitle = [];
        foreach ($shows as $data) {
            $showsByTitle[$data['title']] = Show::create($data);
        }

        $events = [
            ['data' => '2026-06-12', 'hour' => '20:30', 'place' => 'Prevalle, cortile oratorio',     'show' => 'PAESE MIO CHE STAI SULLA COLLINA'],
            ['data' => '2026-06-19', 'hour' => '20:30', 'place' => 'Ponte Caffaro, Cinema',           'show' => 'PAESE MIO CHE STAI SULLA COLLINA'],
            ['data' => '2026-06-21', 'hour' => '16:00', 'place' => 'Mompiano, RSA P. di Rosa',         'show' => 'LIBERA USCITA'],
            ['data' => '2026-06-27', 'hour' => '21:00', 'place' => 'Goito',                            'show' => 'AHI MARIA!'],
            ['data' => '2026-07-16', 'hour' => '20:30', 'place' => 'Cavriana, Villa Mir',              'show' => 'PAESE MIO CHE STAI SULLA COLLINA'],
            ['data' => '2026-07-30', 'hour' => '20:30', 'place' => 'Onodegno, Pertica Bassa',          'show' => 'PAESE MIO CHE STAI SULLA COLLINA'],
            ['data' => '2026-08-03', 'hour' => '21:00', 'place' => 'Fasano sotto, via Resola',         'show' => 'PAESE MIO CHE STAI SULLA COLLINA'],
            ['data' => '2026-08-17', 'hour' => '16:30', 'place' => 'Armo Valvestino, piazza',          'show' => 'LIBERA USCITA'],
            ['data' => '2026-08-22', 'hour' => '20:45', 'place' => 'Soiano, castello (su prenotazione)', 'show' => 'PAESE MIO CHE STAI SULLA COLLINA'],
            ['data' => '2026-08-23', 'hour' => '20:45', 'place' => 'Polpenazze, Castello',             'show' => 'PAESE MIO CHE STAI SULLA COLLINA'],
        ];

        foreach ($events as $event) {
            Event::create([
                'place' => $event['place'],
                'data' => $event['data'],
                'hour' => $event['hour'],
                'show_id' => $showsByTitle[$event['show']]->id,
            ]);
        }
    }
}
