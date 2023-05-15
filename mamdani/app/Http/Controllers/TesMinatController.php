<?php

namespace App\Http\Controllers;

use App\Models\TesMinat;

class TesMinatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.tesminat.index',[
            'title' => 'Hasil Tes Minat',
            'minat' => TesMinat::all()
        ]);
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
    public function store(StoreTesMinatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TesMinat $tesMinat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TesMinat $tesMinat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTesMinatRequest $request, TesMinat $tesMinat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TesMinat $tesMinat)
    {
        //
    }
}
