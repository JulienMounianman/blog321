<?php

namespace App\Http\Controllers;

use App\Anime;

class AnimeController extends Controller
{
    public function index()
    {

    }

    public function top()
    {
        $animes = Anime::all();

        return view('animes.top', ['animes' => $animes]);
    }

    public function show()
    {

    }
}
