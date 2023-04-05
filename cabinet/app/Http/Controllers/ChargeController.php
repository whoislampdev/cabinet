<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Charges;
use Illuminate\Support\Facades\Auth;

class ChargeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_charge=Charges::where('user_id',Auth::user()->id)->get();
        return view("charge.index",[
            'liste_charge'=> $liste_charge
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("charge.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request);
         $request->validate([
            'libelle' =>['required'],
            'montant' =>['required'],
          
        ]);
        $user_id=Auth::user()->id;
        // if($request->id == -1){
        Charges::create([
            'libelle'=> $request->libelle,
            'montant'=> $request->montant,
            'user_id'=> Auth::user()->id,
        ]);
    // }else{
    //     TypeTicket::where('id',$request['id'])
    //     ->update([
    //         'nom'=>$request->nom,
    //         'prix'=>$request->prix,
    //         'user_id'=> $user_id,
        
    //     ]);
    // }
    return redirect()->back();
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
    public function destroy(string $id)
    {
        //
    }
}
