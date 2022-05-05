<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGadgetRequest;
use App\Http\Requests\UpdateGadgetRequest;
use App\Models\Gadget;

class GadgetController extends Controller
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
     * @param  \App\Http\Requests\StoreGadgetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGadgetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gadget  $gadget
     * @return \Illuminate\Http\Response
     */
    public function show(Gadget $gadget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gadget  $gadget
     * @return \Illuminate\Http\Response
     */
    public function edit(Gadget $gadget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGadgetRequest  $request
     * @param  \App\Models\Gadget  $gadget
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGadgetRequest $request, Gadget $gadget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gadget  $gadget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gadget $gadget)
    {
        //
    }
}
