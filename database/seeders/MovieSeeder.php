<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
            if($response->status() == 404)
                continue;
            $data = json_decode($response, true);
            $validator = Validator::make($data, [
                'title' => 'required',
                'overview' => 'required',
                'release_date' => 'required',
                'poster_path' => 'required',
                'runtime' => 'required',
                'video'
            ]);
            if(isset($data['title']) && isset($data['overview']) && isset($data['release_date']) && isset($data['poster_path'])
                && isset($data['runtime']) && isset($data['video']))
            Film::create([
                'title' => $data['title'],
                'description' => $data['overview'],
                'release_date' => $data['release_date'],
                'age_access_id' => 1,
                'poster' => "http://image.tmdb.org/t/p/original" . $data['poster_path'],
                'rating' => $data['popularity'],
                'duration' => $data['runtime'],
                'country' => 1,
                'trailer' => $data["video"],
                'views' => 2,
            ]);
        }
    }
}
