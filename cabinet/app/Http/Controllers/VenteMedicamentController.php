<?php

namespace App\Http\Controllers;

use App\Models\VenteMedicament;
use App\Http\Requests\StoreVenteMedicamentRequest;
use App\Http\Requests\UpdateVenteMedicamentRequest;
use App\Models\Medicament;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class VenteMedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $med=Medicament::all();
        return view('medicament.vendre_medicament',compact('med'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVenteMedicamentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VenteMedicament $venteMedicament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VenteMedicament $venteMedicament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVenteMedicamentRequest $request, VenteMedicament $venteMedicament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VenteMedicament $venteMedicament)
    {
        //
    }
}
