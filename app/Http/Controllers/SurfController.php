<?php

namespace App\Http\Controllers;

use App\Models\surf;
use App\Http\Requests\StoresurfRequest;
use App\Http\Requests\UpdatesurfRequest;

class SurfController extends Controller
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
     * @param  \App\Http\Requests\StoresurfRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresurfRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\surf  $surf
     * @return \Illuminate\Http\Response
     */
    public function show(surf $surf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\surf  $surf
     * @return \Illuminate\Http\Response
     */
    public function edit(surf $surf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesurfRequest  $request
     * @param  \App\Models\surf  $surf
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesurfRequest $request, surf $surf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\surf  $surf
     * @return \Illuminate\Http\Response
     */
    public function destroy(surf $surf)
    {
        //
    }
}
