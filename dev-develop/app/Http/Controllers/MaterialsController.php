<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialsRequest;
use App\Http\Resources\Materials\MaterialsCollection;
use App\Http\Resources\Materials\MaterialsResource;
use App\Model\Materials;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return MaterialsCollection::collection(Materials::paginate(20));
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
    public function store(MaterialsRequest $request)
    {
        $materials = new Materials;
        $materials->name = $request->name;
        $materials->categories_id = $request->categories_id;
        $materials->save();

        return response([
            'data' => new MaterialsResource($materials )
        ], Response::HTTP_CREATED);
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
     * @return array
     */
    public function update(Request $request, Materials $materials)
    {
        $materials->update($request->all());
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
