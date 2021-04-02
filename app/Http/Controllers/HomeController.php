<?php

namespace App\Http\Controllers;

use App\Models\Age;
use App\Models\Film;
use App\Models\Film_Status;
use App\Models\Genre;
use App\Models\Review;
use App\Models\Staff;
use App\Models\Type_Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\JsonDecoder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = 0;
        $url = "https://api.themoviedb.org/3/movie/";
        $params = [
            'api_key' => '6c38d3690a40f22a22d3cd705f1a4eb8',
            'language' => 'ru',
        ];
        while ($id != 1000)
        {
            $id++;
            $response = Http::get($url . $id, $params);
            dd($response->status());
            if($response->status() == 400)
                continue;
            $data = json_decode($response, true);
            dd($data);
            Film::create([
                'title' => $data['title'],
                'description' => $data['overview'],
                'release_date' => $data['release_date'],
                'poster' => $data['poster_path'],
                'raiting' => $data['popularity'],
                'duration' => $data['runtime'],
            ]);
        }
    }
}
