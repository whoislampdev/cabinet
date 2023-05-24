<?php

namespace App\Http\Controllers;
// require __DIR__ . '/../../vendor/autoload.php';
use App\Models\Ticket;
use App\Models\TypeTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\EscposImage;


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
  
        // dd($printer);
        // dd($request->id==-1);
        // $montant=TypeTicket::where('nom',$request->acte)->first();
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
       $ticket= Ticket::create([
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
      //    impression
        // // $connector = null;
        $prix=TypeTicket::where('nom',$request->acte)->first();
        $connector = new WindowsPrintConnector("AURES ODP-333");
        // dd($connector);
        /* Print a "Hello world" receipt" */
        $printer = new Printer($connector);
        $img = EscposImage::load("assets\images\media\logo\log.png");
        $printer->graphics($img,);
        $printer->text("Cabinet Medical Yaye fatou Ndiaye!\n");
        $printer->feed(1);
        $printer->text('PRENOM et NOM :'.$ticket->prenom.' '.$ticket->nom);
        $printer->feed(1);
        $printer->text('ADRESSE :'.$ticket->adresse);
        $printer->feed(1);
        $printer->text('AGE :'.$ticket->age);
        $printer->feed(1);
        $printer->text('DATE :'.$ticket->date_vente);
        $printer->feed(1);
        $printer->text('ACTE :'.$ticket->acte);
        $printer->feed(1);
        $printer->text('Prix :'.$prix->prix.' Xof');
        $printer->feed(1);
        $printer->text('---------------------------');
        $printer->feed(1);
        $printer -> cut();
        $img = EscposImage::load("assets\images\media\logo\log.png");
        $printer->graphics($img,);
        $printer->text("Cabinet Medical Yaye fatou Ndiaye!\n");
        $printer->feed(1);
        $printer->text('PRENOM et NOM :'.$ticket->prenom.' '.$ticket->nom);
        $printer->feed(1);
        $printer->text('ADRESSE :'.$ticket->adresse);
        $printer->feed(1);
        $printer->text('AGE :'.$ticket->age);
        $printer->feed(1);
        $printer->text('DATE :'.$ticket->date_vente);
        $printer->feed(1);
        $printer->text('ACTE :'.$ticket->acte);
        $printer->feed(1);
        $printer->text('Prix :'.$prix->prix.' Xof');
        $printer->feed(1);
        $printer->text('---------------------------');
        $printer->feed(1);
        $printer -> cut();
        // $printer->text('---------------------------');

        $printer->close();

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
?>