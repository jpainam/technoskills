<?php

namespace App\Http\Controllers;

use App\Societe;
use Illuminate\Http\Request;

class SocietyController extends Controller
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
        return view('society.index');
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
     * @param  \App\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function show(Society $societe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function edit(Society $societe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Society $societe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Society $societe)
    {
        //
    }
}
