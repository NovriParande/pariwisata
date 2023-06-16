c<?php

namespace App\Http\Controllers;

use App\Models\objects;
use App\Http\Requests\StoreobjectsRequest;
use App\Http\Requests\UpdateobjectsRequest;

class ObjectsController extends Controller
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
     * @param  \App\Http\Requests\StoreobjectsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreobjectsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\objects  $objects
     * @return \Illuminate\Http\Response
     */
    public function show(objects $objects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\objects  $objects
     * @return \Illuminate\Http\Response
     */
    public function edit(objects $objects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateobjectsRequest  $request
     * @param  \App\Models\objects  $objects
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateobjectsRequest $request, objects $objects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\objects  $objects
     * @return \Illuminate\Http\Response
     */
    public function destroy(objects $objects)
    {
        //
    }
}
