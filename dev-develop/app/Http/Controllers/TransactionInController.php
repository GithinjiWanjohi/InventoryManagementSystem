<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionInRequest;
use App\Http\Resources\TransactionIn\TransactionInCollection;
use App\Http\Resources\TransactionIn\TransactionInResource;
use App\Model\TransactionIn;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
    public function store(TransactionInRequest $request)
    {
        $transaction_in = new TransactionIn;
        $transaction_in->dateTime_in = $request->dateTime_in;
        $transaction_in->user_id = $request->user_id;
        $transaction_in->materials_id = $request->materials_id;
        $transaction_in->place_id = $request->place_id;
        $transaction_in->description = $request->description;
        $transaction_in->quantity = $request->quantity;
        $transaction_in->save();

        return response([
            'data' => new TransactionInResource($transaction_in)
        ], Response::HTTP_CREATED);
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
