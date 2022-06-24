<?php

namespace App\Http\Controllers;
use App\Models\Fonction;

use Illuminate\Http\Request;

class FonctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fonc = Fonction::all();
        return view('fonction.index',compact('fonc')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fonc = new Fonction;
        $fonc->nom_fonction = $request-> nom_fonc;
        $fonc->save();
        return redirect()->route('index.fonction');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fonc = Fonction::find($id);
        return view('fonction.edit',compact('fonc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fonc = Fonction::find($id);
        $fonc->nom_fonction = $request->nom_fonc;
       $fonc->update();
   return redirect()->route('index.fonction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fonc = Fonction::find($id);
        $fonc->delete();
        return redirect()->route('index.fonction');
    }
}
