<?php

namespace App\Http\Controllers;

use App\Models\TypeMedicament;
use App\Http\Requests\StoreTypeMedicamentRequest;
use App\Http\Requests\UpdateTypeMedicamentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

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
        return back();
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
    public function edit(TypeMedicament $type_medicament)
    {


        return view('medicament.update_categorie',compact('type_medicament'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeMedicamentRequest $request, TypeMedicament $tp)
    {
        $arrayUpdate=[
            'nom'=>$request->nom,

        ];

        $tp=$tp->update($arrayUpdate);

        return view('medicament.update_categorie',compact('tp'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeMedicament $typeMedicament)
    {
        //
    }
}
