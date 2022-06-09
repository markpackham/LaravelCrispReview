<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Crisp;
use App\Models\Flavour;
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

        $crisps = Crisp::latest()->filter(request(['searchCrisp']))->paginate(10);
        $brands = Brand::with('crisps')->get();
        $flavours = Flavour::with('crisps')->get();

        return view('crisps.index', compact('brands', 'crisps', 'flavours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::with('crisps')->get();
        $flavours = Flavour::with('crisps')->get();
        return view('crisps.create', ['brands' => $brands, 'flavours' => $flavours]);
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
            'crips_name' => ['required', Rule::unique('crisps', 'crisp_name')],
            'crisp_weight' => 'required',
            'crisp_review',
            'crisp_review_score',
            'brand_id',
            'flavour_id',
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
        $brands = Brand::with('crisps')->get();
        $flavours = Flavour::with('crisps')->get();
        return view('crisps.edit', ['crisp' => $crisp, 'brands' => $brands, 'flavours' => $flavours]);
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
            'crisp_review_score',
            'brand_id',
            'flavour_id',
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
