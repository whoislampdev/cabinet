<?php

namespace App\Http\Controllers;

use App\Models\TypeMedicament;
use App\Http\Requests\StoreTypeMedicamentRequest;
use App\Http\Requests\UpdateTypeMedicamentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TypeMedicamentController extends Controller
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
    public function store(StoreTypeMedicamentRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeMedicament $typeMedicament): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeMedicament $typeMedicament): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeMedicamentRequest $request, TypeMedicament $typeMedicament): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeMedicament $typeMedicament): RedirectResponse
    {
        //
    }
}
