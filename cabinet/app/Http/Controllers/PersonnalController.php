<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Personnals;

class PersonnalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('personnal.index');
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
        // dd($request);
        // validation des donnees
        $request->validate([
            'telephone' => ['required'],
            'role' => ['required'],
            'fonction' => ['required'],
            'adresse' => ['required'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Personnals::class],
            'password' => ['required'],
        ]);
        // add personal du cabinet
        // $id=$request->id;
        Personnals::create([
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'name'=>$request->name,
            'adresse'=>$request->adresse,
            'fonction'=>$request->fonction,
            'telephone'=>$request->telephone,
        ]);
        // creation de la compte d'acces
        User::create([
            'name'=>$request->prenom.' '.$request->name,
            'role'=>$request->role,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
        ]);
        return back();

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
