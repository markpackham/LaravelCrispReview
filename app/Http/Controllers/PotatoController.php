<?php

namespace App\Http\Controllers;

use App\Models\Potato;
use App\Http\Requests\StorePotatoRequest;
use App\Http\Requests\UpdatePotatoRequest;
use Illuminate\Validation\Rule;

class PotatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('potatoes.index', [
            'potatoes' => Potato::latest()->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('potatoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePotatoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePotatoRequest $request)
    {
        $formFields = $request->validate([
            'potato_name' => ['required', Rule::unique('potato_name', 'potatoes')],
            'potato_country' => 'required',
        ]);

        Potato::create($formFields);

        return redirect('/potatoes')->with('message', 'Potato created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Potato  $potato
     * @return \Illuminate\Http\Response
     */
    public function show(Potato $potato)
    {
        return view('potatoes.show', [
            'potato' => $potato
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Potato  $potato
     * @return \Illuminate\Http\Response
     */
    public function edit(Potato $potato)
    {
        return view('potatoes.edit', ['potato' => $potato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePotatoRequest  $request
     * @param  \App\Models\Potato  $potato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePotatoRequest $request, Potato $potato)
    {
        $formFields = $request->validate([
            'potato_name' => 'required',
            'potato_country' => 'required',
        ]);

        return back()->with('message', 'Potato updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Potato  $potato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Potato $potato)
    {
        $potato->delete();
        return redirect('/potatoes')->with('message', 'Potato deleted successfully');
    }
}
