<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class PharmacieDetailsController extends Controller
{

    public function index()
    {
        $count_medoc=Medicament::all()->count();
    $count_Tymedocs=TypeMedicament::all()->count();
    $date=UserDateLog::where('use_id', Auth::user()->id)->
    orderBy('created_at', 'desc')->first();
    $count_Ventmedocs=VenteMedicament::where('created_at',$date->date_log)->get()->count();
    $medi=Medicament::all();
    return view('pharmacie.index',[
        'count_medoc'=>$count_medoc,
        'count_Tymedocs'=>$count_Tymedocs,
        'count_Ventmedocs'=>$count_Ventmedocs,
        'medi'=>$medi,
    ]);
           
        }

        return view('vente.show',[
            'Montant_total'=>self::$Montant,
            'cout_vente'=>self::$count
        ]);
    
            //  dd($this->Montant_total);
    }

    public function data_by_mois(Request $request){
        // dd($request);
        $currentMonth=$request->mois;
        $curentYear=$request->annee;
        // $currentMonth=date('m',$currentMonth);
        $all_tickets=Ticket::all();
        // $all_ticket=
        // return $all_ticket;
        foreach($all_tickets as $all){
            $monthToCompare = date('m', strtotime($all->date_vente));
            $yearToCompare = date('y', strtotime($all->date_vente));

            if($monthToCompare<=10){
            $monthToCompare = str_replace(0, '', $monthToCompare);
        }
         if($currentMonth == $monthToCompare && $curentYear == $yearToCompare){
            self::$all_ticket[]=$all;
            }
            // return self::$all_tickets;
        }
        echo json_encode(self::$all_ticket);
    }
}
