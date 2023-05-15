<?php

namespace App\Http\Controllers;

use App\Models\Rapor;

class RaporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.rapor.index',[
            'title' => 'Nilai Rapor',
            'rapor' => Rapor::all()
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
    public function store(StoreRaporRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Rapor $rapor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rapor $rapor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRaporRequest $request, Rapor $rapor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rapor $rapor)
    {
        //
    }
}
