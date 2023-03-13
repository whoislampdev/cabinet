<?php

namespace App\Http\Controllers;
// require __DIR__ . '/../../vendor/autoload.php';
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_acte=TypeTicket::all();
        return view('caisse.index',[
            'id'=>-1,
            'all_acte'=>$all_acte
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    impression
        // // $connector = null;
        // $connector = new WindowsPrintConnector("Xprinter XP-90");
        // // dd($connector);
        // /* Print a "Hello world" receipt" */
        // $printer = new Printer($connector);
        // $printer->text("Hello World!\n");
        // $printer->cut();
        // $printer->close();

        // dd($printer);
        // dd($request->id==-1);
        $validator=$request->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'adresse' => ['required'],
            'acte' => ['required'],
            'telephone' => ['required'],
            'date_vente' => ['required'],
            'heure_vente' => ['required'],
            'age' => ['required'],
            
          
        ]);
      
        // if($request->id == -1){
        Ticket::create([
            'nom' =>$request->nom,
            'prenom' =>$request->prenom,
            'adresse' =>$request->adresse,
            'acte' =>$request->acte,
            'telephone' =>$request->telephone,
            'date_vente' =>$request->date_vente,
            'heure_vente' =>$request->heure_vente,
            'age' =>$request->age,
            'user_id'=>Auth::user()->id,
        ]);
    // }else{
    //     Ticket::where('id',$request['id'])
    //     ->update([
    //         'nom' =>$request->nom,
    //         'prenom' =>$request->prenom,
    //         'adresse' =>$request->adresse,
    //         'acte' =>$request->acte,
    //         'telephone' =>$request->telephone,
    //         'date_vente' =>$request->date_vente,
    //         'heure_vente' =>$request->heure_vente,
    //         'age' =>$request->age,
        
    //     ]);
    // }
    return redirect()->back()->withErrors($validator)->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
