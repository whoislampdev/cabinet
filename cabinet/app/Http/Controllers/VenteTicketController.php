<?php

namespace App\Http\Controllers;

use App\Models\VenteTicket;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
class VenteTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $request=Auth::user()->id;
       $all_vente_id=Ticket::where('user_id',$request)->get();
    //    dd($all_vente_id);    
        return view('vente.index',[
            'all_vente_id'=>$all_vente_id
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
       
    }

    /**
     * Display the specified resource.
     */
    public function show(VenteTicket $venteTicket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VenteTicket $venteTicket): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVenteTicketRequest $request, VenteTicket $venteTicket): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VenteTicket $venteTicket): RedirectResponse
    {
        //
    }
}
