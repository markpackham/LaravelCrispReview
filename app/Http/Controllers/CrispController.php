<?php

namespace App\Http\Controllers;

use App\Models\Crisp;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        return view('crisps.create');
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
            'crips_name' => 'required', 'unique:flavours,flavour_name',
            'crisp_weight' => ['required', 'numeric|min:1'],
            'crisp_review',
            'crisp_score' =>  'numeric|min:1|max:5',
        ]);

        if ($request->hasFile('crisp_image')) {
            $formFields['crisp_image'] = $request->file('crisp_image')->store('crisp_image', 'public');
        }

        Crisp::create($formFields);

        return redirect()->route('crisps')->with('message', 'Crisp created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crisp  $crisp
     * @return \Illuminate\Http\Response
     */
    public function show(Crisp $crisp)
    {
        return view('crisps.show', [
            'crisp' => $crisp
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crisp  $crisp
     * @return \Illuminate\Http\Response
     */
    public function edit(Crisp $crisp)
    {
        return view('crisps.edit', ['crisp' => $crisp]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crisp  $crisp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crisp $crisp)
    {
        $formFields = $request->validate([
            'crisp_name' => 'required',
            'crisp_weight' => 'required',
            'crisp_review',
            'crisp_score' => 'numeric|min:1|max:5',
        ]);

        if ($request->hasFile('crisp_image')) {
            $formFields['crisp_image'] = $request->file('crisp_image')->store('crisp_image', 'public');
        }

        $crisp->update($formFields);
        return redirect()->route('crisps')->with('message', 'Crisp updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crisp  $crisp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crisp $crisp)
    {
        $crisp->delete();
        return redirect()->route('crisps')->with('message', 'Crisp deleted successfully');
    }
}
