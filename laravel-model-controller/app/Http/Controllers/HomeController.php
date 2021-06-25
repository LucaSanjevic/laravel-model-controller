<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;


class HomeController extends Controller
{
public function index() {
$film = ["movies" => Movie::all()];

        return view('homepage', $film);
                        }
}