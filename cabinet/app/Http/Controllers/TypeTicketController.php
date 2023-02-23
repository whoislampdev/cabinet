<?php

namespace App\Http\Controllers;

use App\Models\TypeTicket;
use App\Http\Requests\StoreTypeTicketRequest;
use App\Http\Requests\UpdateTypeTicketRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TypeTicketController extends Controller
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
    public function store(StoreTypeTicketRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeTicket $typeTicket): Response
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
    public function update(UpdateTypeTicketRequest $request, TypeTicket $typeTicket): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeTicket $typeTicket): RedirectResponse
    {
        //
    }
}
