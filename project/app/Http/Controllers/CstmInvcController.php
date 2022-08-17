<?php

namespace App\Http\Controllers;

use App\Models\CstmInvc;
use Illuminate\Http\Request;

class CstmInvcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order', ['customerinv' => CstmInvc::latest()->paginate(10)->withQueryString()]);
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
     * @param  \App\Models\CstmInvc  $cstmInvc
     * @return \Illuminate\Http\Response
     */
    public function show(CstmInvc $cstmInvc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CstmInvc  $cstmInvc
     * @return \Illuminate\Http\Response
     */
    public function edit(CstmInvc $cstmInvc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CstmInvc  $cstmInvc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CstmInvc $cstmInvc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CstmInvc  $cstmInvc
     * @return \Illuminate\Http\Response
     */
    public function destroy(CstmInvc $cstmInvc)
    {
        //
    }
}
