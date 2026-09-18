<?php

namespace App\Http\Controllers;

use App\Models\genders;
use App\Http\Requests\StoregendersRequest;
use App\Http\Requests\UpdategendersRequest;

class GendersController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoregendersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(genders $genders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(genders $genders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategendersRequest $request, genders $genders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(genders $genders)
    {
        //
    }
}
