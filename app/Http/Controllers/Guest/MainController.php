<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\House;

class MainController extends Controller
{

    public function index() {

        $houses = House :: all();

        return view("home", compact('houses'));
    }
}
