<?php

namespace App\Http\Controllers;

use App\Models\Flavour;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class FlavourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('flavours.index', [
            'flavours' => Flavour::latest()->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flavours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'flavour_name' => ['required', Rule::unique('flavours', 'flavour_name')],
        ]);

        Flavour::create($formFields);

        return redirect()->route('flavours')->with('message', 'Flavour created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flavour  $flavour
     * @return \Illuminate\Http\Response
     */
    public function show(Flavour $flavour)
    {
        return view('flavours.show', [
            'flavour' => $flavour
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flavour  $flavour
     * @return \Illuminate\Http\Response
     */
    public function edit(Flavour $flavour)
    {
        return view('flavours.edit', ['flavour' => $flavour]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flavour  $flavour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flavour $flavour)
    {
        $formFields = $request->validate([
            'flavour_name' => 'required',
        ]);

        $flavour->update($formFields);
        return redirect()->route('flavours')->with('message', 'Flavour updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flavour  $flavour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flavour $flavour)
    {
        $flavour->delete();
        return redirect()->route('flavours')->with('message', 'Flavour deleted successfully');
    }
}
