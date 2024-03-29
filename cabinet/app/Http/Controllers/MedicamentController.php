<?php

namespace App\Http\Controllers;

use App\Models\Medicament;

use App\Models\TypeMedicament;
// <<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;


class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $medicament=Medicament::all();

        return view('medicament.liste_medicament', compact('medicament'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=TypeMedicament::all();

        return view('medicament.newmedicament', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Medicament::create([
            'nom'=>$request->nom,
            'prix'=>$request->prix,
            'quantite_disponible'=>$request->quantite_disponible,
            'posologie'=>$request->posologie,
        ]);
        return back()->with('message','ajouter avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Medicament $medicament)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicament $med)
    {
        if (! Gate::denies('update-post', $med)) {
            abort(403);
        }
        $med=TypeMedicament::all();
        return view('medicament.update_medicament', compact('med'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicamentRequest $request, Medicament $med)
    {
        if (! Gate::allows('update-post', $med)) {
            abort(403);
        }
        $arrayUpdate=[
            'nom'=>$request->nom,
            'prix'=>$request->prix,
            'posologie'=>$request->posologie,
            'quantite_disponible'=>$request->quantite_disponible,
        ];

        $med->update($arrayUpdate);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicament $medicament)
    {
        //
    }
}

?>

