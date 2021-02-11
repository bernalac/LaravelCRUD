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
        $autor = Autor::first()->paginate(15);
  
        return view('autor.index',compact('autor'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $array = Autor::find($id)->frases()->get();
        $autor = Autor::find($id);
        //return view('autor.show',compact('autor'), compact($array));
        return View::make('autor.show')->with('autor', $autor)->with('array', $array);
    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('autor.create');

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

            'name' => 'required',

            'fecha_nac' => 'required',

        ]);

    

        Autor::create($request->all());

     

        return redirect()->route('autor.index')

                        ->with('success','Autor creado correctamente.');

    }

    public function edit(Autor $autor)

    {

        return view('autor.edit',compact('autor'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Autor  $autor

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Autor $autor)

    {

        $request->validate([

            'name' => 'required',

            'fecha_nac' => 'required',

        ]);

    

        $autor->update($request->all());

    

        return redirect()->route('autor.index')

                        ->with('success','Autor actualizado');

    }

    public function destroy(Autor $autor)

    {
        $n = Autor::find($autor->id)->frases()->get();
        if ($n->isEmpty()) {
            $autor->delete();
            return redirect()->route('autor.index')
    
                            ->with('success','Eliminado correctamente');
            
            
        } else {
            return redirect()->route('autor.index')
    
                ->with('error','No eliminado porque tiene frases');
        }
       

    }
   
    
}
