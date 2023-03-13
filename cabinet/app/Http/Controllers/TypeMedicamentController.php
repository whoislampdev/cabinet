<?php

namespace App\Http\Controllers;

use App\Models\TypeMedicament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TypeMedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type=TypeMedicament::all();
        return view('medicament.liste_categorie', compact('type'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('medicament.newcategorie');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        TypeMedicament::create([
            'nom'=>$request->nom,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeMedicament $typeMedicament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeMedicament $typeMedicament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeMedicamentRequest $request, TypeMedicament $typeMedicament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeMedicament $typeMedicament)
    {
        //
    }
}
