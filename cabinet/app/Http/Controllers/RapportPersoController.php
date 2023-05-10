<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Ticket,UserDateLog,Personnals,User,TypeTicket};
class RapportPersoController extends Controller
{
    public static $date=array(1=>'Janvier',2=>'Fevrier',3=>'Mars',4=>'Avril',5=>'Mai',6=>'Juin',7 =>'Juillet',8 =>'Aout',9=>'Septembre',10=>'Octobre',11 =>'Novembre',12 => 'Decembre');
    public static $mois=[];
    public static $all_ticket=0;
    public static $jour=[];
    public function index()
    {
        $currentMonth='';
        $curentDay='';
        $role='caisse';

        $all_ticket=Ticket::all();
        $all_users=User::where('role',$role)->get();
        // $all_ticket=
        // return $all_ticket;
        foreach($all_ticket as $all){
            $monthToCompare = date('m', strtotime($all->date_vente));
            $JourToCompare = date('d', strtotime($all->date_vente));
            

            if($monthToCompare<=10){
            $monthToCompare = str_replace(0, '', $monthToCompare);
            }
            self::$mois[$monthToCompare]=self::$date[$monthToCompare];
            self::$jour[$JourToCompare]=$JourToCompare;
            ;
            // dd(self::$year);
            
           
            if($currentMonth == $monthToCompare && $JourToCompare==$curentDay && $currentAgents == $all->user_id){
            self::$data[]=$all;
            }
           
        }
        // return self::$mois;
        // return self::$data;

        
     
        return view('personnal.rapport',[
            'mois'=>self::$mois,
            'jour'=>self::$jour,
            'all_users'=>$all_users,
            
        ]);
    }
    public function data_by_mois(Request $request){
        // dd($request);
        $currentMonth=$request->mois;
        $curentDay=$request->jour;
        $currentAgents=$request->user_id;
        // $users=User::find($currentAgents);
        $date=UserDateLog::where('use_id', $currentAgents)->
        orderBy('created_at', 'desc')->first();
    
            
            $all_tickets=Ticket::where('user_id',$currentAgents)->get();
            $all_typeTicket=TypeTicket::all();
    
            foreach($all_tickets as $all){
                $monthToCompare = date('m', strtotime($all->date_vente));
                $DayToCompare = date('d', strtotime($all->date_vente));
                // $agentsTocompare=$all->user_id;
               
    
                if($monthToCompare<=10){
                $monthToCompare = str_replace(0, '', $monthToCompare);
            }
            if($currentMonth == $monthToCompare && $curentDay == $DayToCompare ){
            foreach($all_typeTicket as $type_ticket){
        
             if($type_ticket->nom == $all->acte){
              
                    self::$all_ticket+=$type_ticket->prix;
                    }
                
            }
        }
            
          
        }
        echo json_encode(self::$all_ticket);
    }
}
