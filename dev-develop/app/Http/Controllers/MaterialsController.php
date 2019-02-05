<?php

namespace App\Http\Controllers;

use App\Http\Resources\Materials\MaterialsResource;
use App\Model\Materials;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Materials[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Materials::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Materials  $materials
     * @return MaterialsResource
     */
    public function show($id)
    {
        $material = Materials::findOrFail($id);
        //Return as a resource
        return new MaterialsResource($material);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function edit(Materials $materials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materials $materials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materials $materials)
    {
        //
    }
}
