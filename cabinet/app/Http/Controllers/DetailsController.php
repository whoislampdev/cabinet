<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Ticket,User,TypeTicket,UserDateLog};
class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public static  $Montant=0;
     public static  $count=0;
    public function index()
    {
        $total_vente=Ticket::where('user_id', Auth::user()->id)->get();
     
        // total  vente journalier
        $montant=TypeTicket::all();

        $date=UserDateLog::where('use_id', Auth::user()->id)->
        orderBy('created_at', 'desc')->first();
        foreach($total_vente as $vente){
         
            
          if($date->date_log === $vente->date_vente){
            foreach($montant as $type_ticket){
                
                if($type_ticket->nom === $vente->acte ){
                    // return $type_ticket->prix;
                    self::$Montant+=$type_ticket->prix;
                
                }
        }
        // }
            
            }
           
        }
        // nombre total journalier
        $cout_vente=Ticket::where('user_id', Auth::user()->id)->get();
        $date_log_count=UserDateLog::where('use_id', Auth::user()->id)->
        orderBy('created_at', 'desc')->first();
        // dd($date_log_count);
        foreach($cout_vente as $vente){
                // foreach($date_log as $date){
                    // dd($date->date_log === $vente->date_vente);
            if($date_log_count->date_log === $vente->date_vente){
                // return $type_ticket->prix;
                 self::$count+=1;
            
            }
      
           
        }
        // dd(self::$Montant_total);
        return view('vente.show',[
            'Montant_total'=>self::$Montant,
            'cout_vente'=>self::$count
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