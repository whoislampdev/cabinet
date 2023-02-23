<?php

namespace App\Http\Controllers;

use App\Models\UserDateLog;
use App\Http\Requests\StoreUserDateLogRequest;
use App\Http\Requests\UpdateUserDateLogRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class UserDateLogController extends Controller
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
    public function store(StoreUserDateLogRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDateLog $userDateLog): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserDateLog $userDateLog): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserDateLogRequest $request, UserDateLog $userDateLog): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDateLog $userDateLog): RedirectResponse
    {
        //
    }
}
