<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencController extends Controller
{
    
     public function __construct() {
        $this->middleware('auth');
    }
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
     * @param  \App\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function show(Agency $agence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function edit(Agency $agence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agency $agence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agency $agence)
    {
        //
    }
}
