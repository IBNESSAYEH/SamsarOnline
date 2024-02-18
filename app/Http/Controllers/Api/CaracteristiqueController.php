<?php

namespace App\Http\Controllers;

use App\Models\Caracteristique;
use App\Http\Requests\StoreCaracteristiqueRequest;
use App\Http\Requests\UpdateCaracteristiqueRequest;

class CaracteristiqueController extends Controller
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
     * @param  \App\Http\Requests\StoreCaracteristiqueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCaracteristiqueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function show(Caracteristique $caracteristique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function edit(Caracteristique $caracteristique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCaracteristiqueRequest  $request
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCaracteristiqueRequest $request, Caracteristique $caracteristique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caracteristique $caracteristique)
    {
        //
    }
}
