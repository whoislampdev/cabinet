<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use App\Http\Requests\StoreMedicamentRequest;
use App\Http\Requests\UpdateMedicamentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicamentRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicament $medicament): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicament $medicament): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicamentRequest $request, Medicament $medicament): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicament $medicament): RedirectResponse
    {
        //
    }
}
