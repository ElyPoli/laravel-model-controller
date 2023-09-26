<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {
        $data = Movie::all();

		return view('home', [
            "moviesList" => $data
        ]);
	}
}