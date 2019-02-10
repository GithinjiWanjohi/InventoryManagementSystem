<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionIn\TransactionInCollection;
use App\Http\Resources\TransactionIn\TransactionInResource;
use App\Model\TransactionIn;
use Illuminate\Http\Request;

class TransactionInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return TransactionInCollection::collection(TransactionIn::paginate(50));
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
     * @param  \App\Model\TransactionIn  $transactionIn
     * @return TransactionInResource
     */
    public function show($id)
    {
        $transactionIn = TransactionIn::findOrFail($id);
        //Return as a resource
        return new TransactionInResource($transactionIn);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\TransactionIn  $transactionIn
     * @return \Illuminate\Http\Response
     */
    public function edit(TransactionIn $transactionIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TransactionIn  $transactionIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransactionIn $transactionIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TransactionIn  $transactionIn
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionIn $transactionIn)
    {
        //
    }
}
