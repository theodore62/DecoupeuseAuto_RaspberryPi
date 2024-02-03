<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Parametres;
use App\Http\Controllers\DateTime;

class historiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historiques = Parametres::all();   
        return view('historique', ['historiques'=> $historiques, 'IHM'=> false ,'nav'=> true]);

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
     
        // $date = new \DateTime;
        // Log::info($date);
        $request->validate(
            [
            'valeurDecoupe' =>'required',
            'valeurlongueur' =>'required',
            'valeurNom' =>'required',
            ]);
            $valuerDecoupe = intval($request->valeurDecoupe);
            $valeurLongueur = intval( $request->valeurlongueur) ;

         $parametres = Parametres::create([
            'client'=> $request->valeurNom,
            'NB_decoupe'=>$valuerDecoupe ,
            'longueur_decoupe'=>$valeurLongueur,
            'NB_rouleau'=> 0,
            'date'=> new \DateTime ,
         ]);   
        //  $date->format("yyyy-MM-dd'T'HH:mm:ss")
        $parametres->save();
        return view('/IHM',['parametres'=> $parametres, 'IHM'=>true,'nav'=> false]);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  array  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        log::info($id);
        $Parametres = Parametres::find($id); 
        $Parametres->delete();
        $historiques = Parametres::all();   
        return view('historique', ['historiques'=> $historiques, 'IHM'=> false,'nav'=> true]);
    }
}
