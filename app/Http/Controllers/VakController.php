<?php

namespace App\Http\Controllers;

use App\Models\Vak;
use Illuminate\Http\Request;

class VakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vakken = Vak::with('docent')->orderBy('naam')->get();
        return view('vakken.index', compact('vakken'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vak $vak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vak $vak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vak $vak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vak $vak)
    {
        //
    }
}
