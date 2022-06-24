<?php

namespace App\Http\Controllers;
use App\Models\Personnel;
use App\Models\Banque;
use App\Models\Ville;

use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ville = Ville::get();
        $banque = Banque::get();
        $perso = Personnel::all();
        return view('personnel.index',compact('perso','ville','banque'));
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
        $perso = new Personnel;
        $perso->passport = $request-> num_pass;
        $perso->mobile = $request-> mob;
        $perso->naiss = $request-> naiss;
        $perso->civilite = $request-> civ;
        $perso->sexe = $request-> sex;
        $perso->address = $request-> adr;
        $perso->ville_id = $request-> ville;
        $perso->banque_id = $request-> banque;
        $perso->save();
        return redirect()->route('index.personnel');
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
        $ville = Ville::get();
        $banque = Banque::get();
        $perso = Personnel::find($id);
    return view('personnel.edit',compact('perso','ville','banque'));
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
        $perso = Personnel::find($id);
        $perso->passport = $request-> num_pass;
        $perso->mobile = $request-> mob;
        $perso->naiss = $request-> naiss;
        $perso->civilite = $request-> civ;
        $perso->sexe = $request-> sex;
        $perso->address = $request-> adr;
        $perso->ville_id = $request-> ville;
        $perso->banque_id = $request-> banque;
       $perso->update();
   return redirect()->route('index.personnel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perso = Personnel::find($id);
        $perso->delete();
        return redirect()->route('index.personnel');
    }
}
