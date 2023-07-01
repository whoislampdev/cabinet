<?php

namespace App\Http\Controllers;

// use App\Models\VenteMedicament;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateVenteMedicamentRequest;
use App\Models\Medicament;
use App\Models\{
    Ticket,
    UserDateLog,
    VenteMedicament};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\EscposImage;
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
    public function store(Request $request)
    {
        $data=$request;
        return $data;
        foreach ($data as  $datum) {
            $rowData = json_decode($datum, true);
            VenteMedicament::create([
                'quantite'=> $rowData['quantite'],
                'user_id'=> $rowData['user_id,'],
                'ticket_id'=> $rowData['tickets'],
                'medicament_id'=> $rowData['medicaments'],
            ]);
        }
        
    }
    public function vente(Request $request)
    {
        $req_data = $request->all();
           $quantites=$req_data['quantites'];
            $medicament=$req_data['medicaments'];
            $tickets=$req_data['tickets'];
            $user=$req_data['user_id'];
            $connector = new WindowsPrintConnector("AURES ODP-333");
            $printer = new Printer($connector);
            $img = EscposImage::load("assets\images\media\logo\log.png");            
        $printer->graphics($img,);
        $printer->text("Cabinet Medical Yaye fatou Ndiaye!\n");
        $printer->feed(1);
        $printer->text('numero Tickets:'.$tickets[0]);
        $printer->feed(1);
        foreach ($quantites as $quant) {

            foreach($medicament as $med){
                foreach($tickets as $tik){
                    $ticket=$tik;
                    foreach($user as $u){
                        $users=$u;
                    }
                }
            }
            $quantite=$quant;
            VenteMedicament::create([
                'quantite'=> $quant,
                'user_id'=> $u,
                'ticket_id'=> $tik,
                'medicament_id'=> $med,
            ]);
            $medocs=Medicament::find($med);
            $printer->feed(1);
            $printer->text('Medicament :'.$medocs->nom.' ');
            $printer->text('quantite :'.$quantite);
            $printer->feed(2);
        
        }
            $printer->cut();
            $printer->close();
            
        
        return response('Form submitted successfully!');
        
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
