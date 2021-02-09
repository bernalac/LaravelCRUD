<?php

namespace App\Http\Controllers;

use App\Models\Autor;
//use App\Models\Frases;
use Illuminate\Http\Request;
use View;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autor = Autor::latest()->paginate(15);
  
        return view('autor.index',compact('autor'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
        $array = Autor::find($autor->id)->frases()->get();

        //return view('autor.show',compact('autor'), compact($array));
        return View::make('autor.show')->with('autor', $autor)->with('array', $array);
    }
   
    
}
