<?php

namespace App\Http\Controllers;

use App\Models\Crisp;
use App\Http\Requests\StoreCrispRequest;
use App\Http\Requests\UpdateCrispRequest;

class CrispController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crisps.index', [
            'crisps' => Crisp::latest()->paginate(20)
        ]);
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
     * @param  \App\Http\Requests\StoreCrispRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCrispRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crisp  $crisp
     * @return \Illuminate\Http\Response
     */
    public function show(Crisp $crisp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crisp  $crisp
     * @return \Illuminate\Http\Response
     */
    public function edit(Crisp $crisp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCrispRequest  $request
     * @param  \App\Models\Crisp  $crisp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCrispRequest $request, Crisp $crisp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crisp  $crisp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crisp $crisp)
    {
        //
    }
}
