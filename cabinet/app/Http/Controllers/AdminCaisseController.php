<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class AdminCaisseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public static $date=array(1=>'Janvier',2=>'Fevrier',3=>'Mars',4=>'Avril',5=>'Mai',6=>'Juin',7 =>'Juillet',8 =>'Aout',9=>'Septembre',10=>'Octobre',11 =>'Novembre',12 => 'Decembre');
   public static $mois=[];
   public static $data=[];
   public static $year=[];
    public function index()
    {
        $currentMonth=date('m');
        $currenYear=date('y');
 
        $all_ticket=Ticket::all();
        // $all_ticket=
        // return $all_ticket;
        foreach($all_ticket as $all){
            $monthToCompare = date('m', strtotime($all->date_vente));
            $yearToCompare=date('y', strtotime($all->date_vente));
            $monthToCompare = str_replace(0, '', $monthToCompare);
            self::$mois[$monthToCompare]=self::$date[$monthToCompare];
            self::$year[$yearToCompare]=$currenYear;
            dd(self::$year);
            
           
            if($currentMonth == $monthToCompare){
            self::$data[]=$all;
            }
           
        }
        // return self::$mois;
        // return self::$data;

        
     
        return view('AdminRapport.index',[
            'mois'=>self::$mois
        ]);
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
        
        $currentMonth=$request->date_vente;
 
        $all_ticket=Ticket::all();
        // return $all_ticket;
        foreach($all_ticket as $all){
            $monthToCompare = date('m', strtotime($all->date_vente));
            // return $monthToCompare;
            if($currentMonth == $monthToCompare){
            self::$date[]=$all->date_vente;
            }
        }

        
       echo self::$date;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
