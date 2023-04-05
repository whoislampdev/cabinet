<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Ticket,User,TypeTicket};
class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public static  $Montant_total=0;
    public function index()
    {

     
        $total_vente=Ticket::where('user_id', Auth::user()->id)->get();
        // dd($total_vente);
        foreach($total_vente as $vente){
           
            // $this->Montant_total += $vente->montant;    
            $montant=TypeTicket::where('user_id', Auth::user()->id)->get();
            foreach($montant as $type_ticket){
            if($type_ticket->nom === $vente->acte){
                // return $type_ticket->prix;
                 self::$Montant_total+= $type_ticket->prix;
            
            }
            
            }
           
        }
        // dd(self::$Montant_total);
        return view('vente.show',[
            'Montant_total'=>self::$Montant_total
        ]);
    
            //  dd($this->Montant_total);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
?>