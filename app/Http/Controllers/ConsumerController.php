<?php

namespace App\Http\Controllers;

use App\Models\Billings;
use App\Http\Requests\StoreBillingsRequest;
use App\Http\Requests\UpdateBillingsRequest;

class ConsumerController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBillingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Billings  $billings
     * @return \Illuminate\Http\Response
     */
    public function show(Billings $billings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBillingsRequest  $request
     * @param  \App\Models\Billings  $billings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillingsRequest $request, Billings $billings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Billings  $billings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Billings $billings)
    {
        //
    }
}
