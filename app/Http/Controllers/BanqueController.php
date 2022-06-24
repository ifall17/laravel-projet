<?php

namespace App\Http\Controllers;

use App\Models\Banque;

use Illuminate\Http\Request;

class BanqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banque = Banque::all();
        return view('banque.index',compact('banque')); 
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
        $banque = new Banque;
        $banque->nom_banque = $request-> nom_banque;
        $banque->num_compte = $request-> num_compte;
        $banque->save();
        return redirect()->route('index.banque');
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
        $banque = Banque::find($id);
        return view('banque.edit',compact('banque'));
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
        $banque = Banque::find($id);
        $banque->nom_banque = $request->nom_banque;
        $banque->num_compte = $request->num_compte;

       $banque->update();
   return redirect()->route('index.banque');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banque = Banque::find($id);
        $banque->delete();
        return redirect()->route('index.banque');
    }
}
