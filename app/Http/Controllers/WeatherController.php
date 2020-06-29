<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $response = Http::get('api.openweathermap.org/data/2.5/weather?id=1581130&appid=bc5d0bffa1dbef3f3ac2b168eb743fb6');
        $body = $response->body();
        $weather = json_decode($body);
        $ces = floor($weather->main->temp-273);
        $city= $weather->name;
        return view('index',compact('ces','city'));
    }
}
