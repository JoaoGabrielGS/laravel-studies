<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series =  [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy',
            'A > B',
        ];

        return view('series.index', compact('series'));
    }

    public function create() {
        return view('series.create');
    }
}
