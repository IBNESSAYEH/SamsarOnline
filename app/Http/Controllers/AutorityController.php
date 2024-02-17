<?php

namespace App\Http\Controllers;

use App\Models\Autority;
use App\Http\Requests\StoreAutorityRequest;
use App\Http\Requests\UpdateAutorityRequest;

class AutorityController extends Controller
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
     * @param  \App\Http\Requests\StoreAutorityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutorityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autority  $autority
     * @return \Illuminate\Http\Response
     */
    public function show(Autority $autority)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autority  $autority
     * @return \Illuminate\Http\Response
     */
    public function edit(Autority $autority)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutorityRequest  $request
     * @param  \App\Models\Autority  $autority
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutorityRequest $request, Autority $autority)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autority  $autority
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autority $autority)
    {
        //
    }
}
