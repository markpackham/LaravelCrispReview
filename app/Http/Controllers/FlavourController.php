<?php

namespace App\Http\Controllers;

use App\Models\Flavour;
use App\Http\Requests\StoreFlavourRequest;
use App\Http\Requests\UpdateFlavourRequest;

class FlavourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFlavourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFlavourRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flavour  $flavour
     * @return \Illuminate\Http\Response
     */
    public function show(Flavour $flavour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flavour  $flavour
     * @return \Illuminate\Http\Response
     */
    public function edit(Flavour $flavour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFlavourRequest  $request
     * @param  \App\Models\Flavour  $flavour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFlavourRequest $request, Flavour $flavour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flavour  $flavour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flavour $flavour)
    {
        //
    }
}
