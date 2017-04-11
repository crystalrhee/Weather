<?php

namespace App\Http\Controllers;

use App\Weather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        $weathers = Weather::orderBy('date', 'desc')->take(5)->get();
    	return view('dashboard', compact('weathers'));
    }

    public function daily()
    {
        $weathers = Weather::orderBy('date', 'desc')->take(1)->get();
        return view('daily', compact('weathers'));
    }

    public function weekly()
    {
    	$weathers = Weather::orderBy('date','desc')->take(7)->get();
    	return view('weekly', compact('weathers'));
    }
}