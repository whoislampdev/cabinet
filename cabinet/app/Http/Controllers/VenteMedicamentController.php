<?php

namespace App\Http\Controllers;

use App\Models\VenteMedicament;
use App\Http\Requests\StoreVenteMedicamentRequest;
use App\Http\Requests\UpdateVenteMedicamentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class VenteMedicamentController extends Controller
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
    public function store(StoreVenteMedicamentRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VenteMedicament $venteMedicament): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VenteMedicament $venteMedicament): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVenteMedicamentRequest $request, VenteMedicament $venteMedicament): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VenteMedicament $venteMedicament): RedirectResponse
    {
        //
    }
}
