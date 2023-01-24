<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    function index () {
        $trains= Train::whereDate('departure_date',  '2023-01-24')->get();

        dump($trains);
        return view('index', compact('trains'));
    }
}
