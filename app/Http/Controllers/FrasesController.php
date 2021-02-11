<?php

namespace App\Http\Controllers;

use App\Models\Frases;
//use App\Models\Frases;
use Illuminate\Http\Request;
use View;

class FrasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frases = Frases::first()->paginate(15);
  
        return view('frases.indexFrases',compact('frases'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Frases  $frases
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aut = Frases::find($id)->autor()->get()[0];
        //echo $frases;
        
        $frases = Frases::find($id);
        //return view('frases.showFrases',compact('frases', $frases));
        return View::make('frases.showFrases')->with('frases', $frases)->with('aut', $aut);
    }

    public function create()

    {

        return view('frases.createFrases');

    }

    

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $request->validate([

            'descripcion' => 'required',

            'categoria' => 'required',

            'autor_id' => 'required',

        ]);

    

        Frases::create($request->all());

     

        return redirect()->route('frases.index')

                        ->with('success','Frase creada correctamente.');

    }

    public function edit($id)

    {
        $frases = Frases::find($id);
        return view('frases.editFrases',compact('frases', $frases));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Frases  $frases

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

        $request->validate([

            'descripcion' => 'required',

            'categoria' => 'required',

            'autor_id' => 'required',

        ]);

    
        $frases = Frases::find($id);
        $frases->update($request->all());

    

        return redirect()->route('frases.index')

                        ->with('success','Frase actualizada');

    }

    public function destroy($id)

    {
        Frases::find($id)->delete();

        return redirect()->route('frases.index')

                        ->with('success','Frase borrada correctamente');

    }
    
   
    
}