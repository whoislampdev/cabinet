<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDateLog;
class RapportCaisseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public static $vente_user_day='';
        

    public function index()
    {
        $Utilisateur=Auth::user()->id;
        $date_log_user=UserDateLog::where('use_id',$Utilisateur)->get()->all();
        // dd($date_log_user);
        
        foreach($date_log_user as $date){
            // if()
        self::$vente_user_day=Ticket::where('date_vente',$date['date_log'])->get()->all();
    
                              
        }
        return self::$vente_user_day;


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