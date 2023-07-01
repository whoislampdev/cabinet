<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\TypeTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TypeTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_tickets=TypeTicket::all();
        return view('Tickets.index',[
            'all_tickets'=>$all_tickets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id=-1;
        return view('Tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->id == -1);
        $request->validate([
            'nom' => ['required','unique:'.TypeTicket::class],
            'prix' => ['required'],
          
        ]);
        $user_id=Auth::user()->id;
        // if($request->id == -1){
        TypeTicket::create([
            'nom'=> $request->nom,
            'prix'=> $request->prix,
            'user_id'=> $user_id,
        ]);
    // }else{
    //     TypeTicket::where('id',$request['id'])
    //     ->update([
    //         'nom'=>$request->nom,
    //         'prix'=>$request->prix,
    //         'user_id'=> $user_id,
        
    //     ]);
    // }
    return redirect()->back()->with('message','ajouter avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeTicket $typeTicket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeTicket $typeTicket): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeTicketRequest $request, TypeTicket $typeTicket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeTicket $typeTicket)
    {
        //
    }
}
