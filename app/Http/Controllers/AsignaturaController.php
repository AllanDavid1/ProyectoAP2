<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Asignatura;
use Illuminate\Support\Facades\Redirect;


class AsignaturaController extends Controller
{
   
    public function index()
    {

        $asignatura=Asignatura::orderBy('id','DESC')->paginate(3);
        return view('asignatura.index',compact('asignatura')); 

    }

   
    public function create()
    {
        return view ('asignatura.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $asignatura=new Asignatura;
$asignatura->Nombre_de_Asignatura=$request->get('nombre');
$asignatura->save();
return Redirect::to('asignatura');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        
 $asignatura=Asignatura::findOrFail($id);
$asignatura->delete();
return Redirect::to('asignatura');
    }
}
