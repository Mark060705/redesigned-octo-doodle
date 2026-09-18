<?php

namespace App\Http\Controllers;

use App\Models\films;
use App\Http\Requests\StorefilmsRequest;
use App\Http\Requests\UpdatefilmsRequest;

class FilmsController extends Controller
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
    public function store(StorefilmsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(films $films)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(films $films)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefilmsRequest $request, films $films)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(films $films)
    {
        //
    }
}
