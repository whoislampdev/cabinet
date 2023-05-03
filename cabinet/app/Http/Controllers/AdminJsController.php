<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class AdminJsController extends Controller
{
    public static $date=array(1=>'Janvier',2=>'Fevrier',3=>'Mars',4=>'Avril',5=>'Mai',6=>'Juin',7 =>'Juillet',8 =>'Aout',9=>'Septembre',10=>'Octobre',11 =>'Novembre',12 => 'Decembre');
    public static $mois=[];
    public static $all_ticket=[];
    public static $year=[];
    public function index()
    {
        $currentMonth='';
        $curentYear='';
 
        $all_ticket=Ticket::all();
        // $all_ticket=
        // return $all_ticket;
        foreach($all_ticket as $all){
            $monthToCompare = date('m', strtotime($all->date_vente));
            $yearToCompare = date('y', strtotime($all->date_vente));

            if($monthToCompare<=10){
            $monthToCompare = str_replace(0, '', $monthToCompare);
            }
            self::$mois[$monthToCompare]=self::$date[$monthToCompare];
            self::$year[$yearToCompare]=$yearToCompare;
            ;
            // dd(self::$year);
            
           
            if($currentMonth == $monthToCompare ){
            self::$data[]=$all;
            }
           
        }
        // return self::$mois;
        // return self::$data;

        
     
        return view('AdminRapport.index',[
            'mois'=>self::$mois,
            'year'=>self::$year,
            'all_ticket'=>$all_ticket
        ]);
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
