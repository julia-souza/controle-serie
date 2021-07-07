<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index() {

        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD'
        ];
        return view ('series.index', compact('series'));
    }

    public function create(){
        return view ('series.create');
    }


}
