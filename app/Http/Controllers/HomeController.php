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
        return view('home');
    }
}
