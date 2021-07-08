<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index() {

        // $series = [
        //     'Grey\'s Anatomy',
        //     'Lost',
        //     'Agents of SHIELD'
        // ];
        
        $series = Serie::all();
       
         

        return view ('series.index', compact('series'));
    }

    public function create(){
        return view ('series.create');
    }

    public function store(Request $request){
        // $serie = $request->nome;
        // $nome = $request->nome;
        // $serie->save();

        $serie = Serie::create($request->all());
      
        return redirect('/'); 
        
    }


}
