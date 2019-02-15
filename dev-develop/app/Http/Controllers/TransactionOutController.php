<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionOutRequest;
use App\Http\Resources\TransactionOut\TransactionOutCollection;
use App\Http\Resources\TransactionOut\TransactionOutResource;
use App\Model\TransactionOut;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TransactionOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return TransactionOutCollection::collection(TransactionOut::paginate(50));
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
    public function store(TransactionOutRequest $request)
    {
        $transaction_out = new TransactionOut;
        $transaction_out->dateTime_out = $request->dateTime_out;
        $transaction_out->user_id = $request->user_id;
        $transaction_out->materials_id = $request->materials_id;
        $transaction_out->place_id = $request->place_id;
        $transaction_out->description = $request->description;
        $transaction_out->quantity = $request->quantity;
        $transaction_out->save();

        return response([
            'data' => new TransactionOutResource($transaction_out)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\TransactionOut  $transactionOut
     * @return TransactionOutResource
     */
    public function show($id)
    {
        $transactionOut = TransactionOut::findOrFail($id);
        //Return as a resource
        return new TransactionOutResource($transactionOut);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\TransactionOut  $transactionOut
     * @return \Illuminate\Http\Response
     */
    public function edit(TransactionOut $transactionOut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TransactionOut  $transactionOut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransactionOut $transactionOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TransactionOut  $transactionOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionOut $transactionOut)
    {
        //
    }
}
