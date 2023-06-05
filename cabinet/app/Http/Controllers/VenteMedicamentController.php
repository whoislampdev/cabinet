<?php

namespace App\Http\Controllers;

use App\Models\VenteMedicament;
use App\Http\Requests\StoreVenteMedicamentRequest;
use App\Http\Requests\UpdateVenteMedicamentRequest;
use App\Models\Medicament;
use App\Models\{Ticket,UserDateLog};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class VenteMedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // touts les medicaments qui existe sur notre pharmacie 
        $medicament=Medicament::all();
        $request=Auth::user()->id;
    //   je parcours les log pour recuperer  la derniere date authentifier de cette user 
        $date_log=UserDateLog::where('use_id', Auth::user()->id)->
        orderBy('created_at', 'desc')->first();
        // et je compare cette date avec la date de vente des tickets pour recuperer la liste des tickets vendu en jouant sur la session
        $all_vente_id=Ticket::where('date_vente',$date_log->date_log)->get(); 
         return view('medicament.vendre_medicament',[
             'all_vente_id'=>$all_vente_id,
             'medicament'=>$medicament
         ]);
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVenteMedicamentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VenteMedicament $venteMedicament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VenteMedicament $venteMedicament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVenteMedicamentRequest $request, VenteMedicament $venteMedicament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VenteMedicament $venteMedicament)
    {
        //
    }
}
