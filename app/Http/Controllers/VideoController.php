<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function getVideos(){

        $filePath = resource_path('views/video/videos.json');

        if (file_exists($filePath)) {
            $video_list = json_decode(file_get_contents($filePath), true)['videos'];
        } else {
            $video_list = [];
        }

        return view('video.video', compact('video_list'));
    }
}
