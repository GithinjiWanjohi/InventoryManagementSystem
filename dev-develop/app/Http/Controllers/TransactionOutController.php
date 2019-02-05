<?php

namespace App\Http\Controllers;

use App\Model\TransactionOut;
use Illuminate\Http\Request;

class TransactionOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return TransactionOut[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return TransactionOut::all();
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
     * @param  \App\Model\TransactionOut  $transactionOut
     * @return \Illuminate\Http\Response
     */
    public function show(TransactionOut $transactionOut)
    {
        //
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
