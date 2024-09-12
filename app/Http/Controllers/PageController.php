<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index() {
        // Ottieni la data di oggi nel formato 'Y-m-d'
        $today = date('Y-m-d');

        // Seleziona solo i treni che partono oggi
        $trains = Train::whereDate('departure_date', $today)->get();

        return view('home', compact('trains'));
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }
}
